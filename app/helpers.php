<?php
function greet() {
    $name = $_GET['name'];
    $username = $_GET['username'];

    return "Hola $name $username !" ;
}
function dd($xivato)
{
    var_dump($xivato);
    die();
}