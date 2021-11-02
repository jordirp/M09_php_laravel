<?php

namespace Framework\Database;

use app\Models\Task;
use PDO;

class Database{

    public $config;
    private $connection;
    /**
     * @param $config
     */
    public function __construct($config)
    {
        $this->config = $config;
        $this->config = new Connection();
    }

    function  selectAll($table) {
        $dbh = $this -> $this->connection >connectDB($this ->config);
        $statement = $dbh -> prepare("SELECT * FROM $table");
        $statement-> execute();
        return $statement-> fetch(PDO::FETCH_CLASS,Task::class);


    }

    function insert(){
        //TODO
    }
}