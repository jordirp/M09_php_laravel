<?php
require 'config.php';
require 'app/helpers.php';
require 'app/Task.php';


$dbh = connectDB($config);


$statement = $dbh -> prepare('SELECT * FROM tasks');
$statement-> execute();
$task=$statement-> fetch(PDO::FETCH_CLASS,'Tasks');
$greeting = greet();


//$greeting = 'Hola' . $_GET['name'] . '!' ;

