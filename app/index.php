<?php
require 'app/helpers.php';
require 'app/Task.php';

$task = new Task(1,'comprar pa', 'a la panaderia',0);
var_dump($task);
//Query string
//var_dump ($_GET['name']);
//$name = 'Sergi';


$config = [
    'database' => [
        'user' =>'debian-sys-maint',
        'password' =>'ri48e17r9cfJIqGu',
        'databasetype' =>'mysql',
        'host' =>'localhost',
        'name' =>'phplaraveldevs',
    ]
];


$user = $config ['database']['user'];
$pass=  $config ['database']['password'];
$type=  $config ['database']['databasetype'];
$host=  $config ['database']['host'];
$dbname=  $config ['database']['phplaraveldevs'];
$dsn ="$type: host= $host;dbname =$dbname";

try {
    $dbh = new PDO($dsn,$user,$pass);

}catch (\Exception $e) {
    echo 'Error de conexió base de dades';
}

$statement = $dbh -> prepare('SELECT * FROM tasks');
$statement-> execute();
$task=$statement-> fetch(PDO::FETCH_CLASS,'Tasks');

var_dump($task);

$greeting = greet();


//$greeting = 'Hola' . $_GET['name'] . '!' ;

