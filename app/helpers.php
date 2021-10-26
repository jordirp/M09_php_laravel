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

function connectDB($config){ // Dependency Injection
    try {
        $dbh = new PDO(
            $config['database']['databasetype'] . ':host=' . $config['database']['host'] . ';dbname=' . $config['database']['name'],
            $config['database']['user'],
            $config['database']['password']);
    }catch (\Exception $e) {
        echo 'Error de conexió base de dades';
    }
}

function fetchAllTask ($dbh){
    $statement = $dbh -> prepare('SELECT * FROM tasks');
    $statement-> execute();
    return $statement-> fetch(PDO::FETCH_CLASS,'Tasks');

}