<?php
require_once "config/conexion.php";

function obtenerCategorias($conexion)
{
    $sql = "SELECT * FROM category;";

    return $conexion->query($sql)->fetchAll();

}

function insertarCategoria($conexion, $datos)
{
    $sql = "Insert INTO category (name) VALUES (:categoria);";

    return $conexion->prepare($sql)->execute($datos);


}


function eliminarCategorias($conexion, $datos){

    $sql="DELETE FROM category WHERE category_id = :idCategoria;
          DELETE FROM film_category WHERE category_id = :idCategoria;";


    return $conexion->prepare($sql)->execute($datos);

}

function obtenerCategoriaPorId($conexion, $datos) {
    $sql= "SELECT * FROM category WHERE category_id = :idCategoria;";

    $query = $conexion->prepare($sql);
    $query ->execute($datos);

    return $query->fetch();

}

function editarCategoria($conexion, $datos){

    $sql ="UPDATE category SET name = :categoria WHERE category_id = :idCategoria;";

    return $conexion->prepare($sql)->execute($datos);


}