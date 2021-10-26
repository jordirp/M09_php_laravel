<?php
require 'app/helpers.php';
require 'app/Task.php';
require 'config.php';

//Query string
//var_dump ($_GET['name']);
//$name = 'Sergi';

try {
    $dbh = new PDO(
        $config['database']['databasetype'] . ':host=' . $config['database']['host'] . ';dbname=' . $config['database']['name'],
        $config['database']['user'],
        $config['database']['password']);
}catch (\Exception $e) {
    echo 'Error de conexió base de dades';
}

$statement = $dbh -> prepare('SELECT * FROM tasks');
$statement-> execute();
$task=$statement-> fetch(PDO::FETCH_CLASS,'Tasks');
$greeting = greet();


//$greeting = 'Hola' . $_GET['name'] . '!' ;

