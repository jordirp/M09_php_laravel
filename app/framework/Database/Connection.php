<?php
namespace Framework\Database;

class Connection
{
    private $config;

    function connectDB(){ // Dependency Injection
        try {
            $dbh = new PDO(
                $this->config['database']['databasetype'] . ':host=' . $this->config['database']['host'] . ';dbname=' . $this->config['database']['name'],
                $this->config['database']['user'],
                $this->config['database']['password']);
        }catch (\Exception $e) {
            echo 'Error de conexió base de dades';
        }
    }
}