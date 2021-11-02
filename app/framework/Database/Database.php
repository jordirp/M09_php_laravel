<?php

namespace Framework\Database;

use app\Models\Task;
use PDO;

class Database{

    private static $pdo;
    public function make($pdo)
    {
        $this -> pdo = $pdo;
    }

    public function  selectAll($table) {
        $statement = $this-> pdo-> prepare("SELECT * FROM $table;");
        $statement-> execute();
        return $statement-> fetch(PDO::FETCH_CLASS);


    }

    function insert(){
        //TODO
    }
}