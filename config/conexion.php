<?php

//valores de mi base de datos local (mi pc)
$host = "localhost";
$dbname = "sakila";
$usuario = "root";
$contrasena = "gustavo0325";


//valores de la base de datos de 000webhost

if ($_SERVER['SERVER_NAME'] == 'gustavo0325.000webhostapp.com') {
    $host = "localhost";
    $dbname = "id12551305_sakila";
    $usuario = "id12551305_gustavo_000webhost";
    $contrasena = "QT+_kOJe0*FGcy1/";
}

$ajustes = [
    19 => 2,//debuelve un array con los nombres de las columnas de los resultados de la BD
    3 => 2,//esto nos genera excepciones cuando hay errores en los queries
];

try {

    $conexion = new PDO("mysql:host={$host};dbname={$dbname}", $usuario, $contrasena);

} catch (PDOException $exception) {
    throw new Exception("Hubo un error para conectarse a la base de datos: {$exception->getMessage() } ");

}