<?php

require_once "config/conexion.php";

function obtenerIdiomas($conexion)
{

    $sql = " SELECT language_id,name FROM language;";


    return $conexion->query($sql)->fetchAll();

}

function insertarIdiomas($conexion, $datos)
{

    $sql = "insert into language(name) VALUES (:nombreIdioma);";


    return $conexion->prepare($sql)->execute($datos);

}

function eliminarIdioma($conexion, $datos){

    $sql="DELETE FROM language where language_id = :idIdioma;";

    return $conexion->prepare($sql)->execute($datos);

}

function obtenerIdiomasPorId($conexion, $datos) {
    $sql= "SELECT * FROM language WHERE language_id = :idIdioma;";

    $query = $conexion->prepare($sql);
    $query ->execute($datos);

    return $query->fetch();

}

function editarIdiomas($conexion, $datos){

    $sql ="UPDATE language SET name = :nombreIdioma WHERE language_id = :idIdioma;";

    return $conexion->prepare($sql)->execute($datos);


}