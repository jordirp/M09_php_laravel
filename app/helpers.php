<?php
function greet() {
    $name = $_GET['name'];
    $username = $_GET['username'];

    return "Hola $name $username !" ;
}