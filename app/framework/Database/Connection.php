<?php
namespace Framework\Database;

class Connection
{
    private static $config;
    public function __construct($config){
        $this ->config = $config;
    }

    public static function make($config){
        static::$config = $config;

        try {
            $dbh = new PDO(
                $config['databasetype'] . ':host=' . $config['host'] . ';dbname=' . $config['name'],
                $config['user'],
                $config['password']);
        }catch (\Exception $e) {
            echo 'Error de conexió base de dades';
        }


    }

}