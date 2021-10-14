<?php
require 'app/helpers.php';
require 'app/Task.php';

$task = new Task(1,'comprar pa', 'a la panaderia',0);
var_dump($task);
//Query string
//var_dump ($_GET['name']);
//$name = 'Sergi';
$user = "debian-sys-maint";
$pass= "3UfvEqjO8ixjy0Rh";

try {
    $dbh = new PDO('mysql:host=localhost;dbname=phplaraveldevs',$user,$pass);

}catch (\Exception $e) {
    echo 'Error de conexió base de dades';
}

$statement = $dbh -> prepare('SELECT * FROM tasks');
$statement-> execute();
$task=$statement-> fetch(PDO::FETCH_CLASS,'Tasks');

var_dump($task);



$greeting = greet();


//$greeting = 'Hola' . $_GET['name'] . '!' ;

