<?php
require_once "config/conexion.php";

function obtenerActores($conexion)
{
    $sql = "SELECT * FROM actor;";

    return $conexion->query($sql)->fetchAll();

}


function insertarActores($conexion, $datos)
{
    $querry = "Insert INTO actor( first_name, last_name) VALUES (:nombreActor, :apellidoActor);";

    return $conexion->prepare($querry)->execute($datos);


}
