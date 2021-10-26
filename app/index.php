<?php
require 'config.php';
require 'app/helpers.php';
require 'app/Task.php';


$tasks = fetchAllTask(connectDB($config));

$greeting = greet();


//$greeting = 'Hola' . $_GET['name'] . '!' ;

