<?php
require 'config.php';
require 'app/helpers.php';
require 'app/Task.php';
require 'framework/Database.php';


$database = new Database($config);
$tasks = $database -> selectAll('tasks');
/*$tasks = Database::selectAll('tasks');*/
/*$tasks = Task::selectAll('tasks'); */



$greeting = greet();


//$greeting = 'Hola' . $_GET['name'] . '!' ;

