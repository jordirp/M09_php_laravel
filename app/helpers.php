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

function fetchAllTask ($dbh){
    $statement = $dbh -> prepare('SELECT * FROM tasks');
    $statement-> execute();
    return $statement-> fetch(PDO::FETCH_CLASS,'Tasks');

}