<?php

class Database{

    public $config;
    private $connection;
    /**
     * @param $config
     */
    public function __construct($config)
    {
        $this->config = $config;
        $this->config = new Connection($config);
    }

    function  selectAll($table) {
        return fetchAllTask($this->connection >connectDB($this ->config));

    }
    function insert(){
        //TODO
    }
}