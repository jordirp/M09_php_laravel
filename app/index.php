<?php


require 'app/helpers.php';

$tasks = App::get('database')::selectAll('tasks');

//$database = new Database(App::get('config'));
/*$tasks = Database::selectAll('tasks');*/
/*$tasks = Task::selectAll('tasks'); */



$greeting = greet();


//$greeting = 'Hola' . $_GET['name'] . '!' ;

