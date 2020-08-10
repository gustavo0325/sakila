<?php
require_once "config/conexion.php";

function obtenerCiudades($conexion)
{

    $sql = "select ci.city_id, ci.city, co.country  
            FROM city AS ci
            INNER JOIN country AS co ON co.country_id = ci.country_id;";


    return $conexion->query($sql)->fetchAll();

}

function insertarCiudades($conexion, $datos)
{

    $sql = "INSERT INTO city( city,country_id) VALUES (:nombreCiudad,:idPais);";

    return $conexion->prepare($sql)->execute($datos);

}

function eliminarCiudades($conexion, $datos){

    $sql="UPDATE address SET city_id = 1  WHERE city_id = :idCity;
          DELETE FROM city WHERE city_id = :idCity;";

    return $conexion->prepare($sql)->execute($datos);

}

function obtenerCiudadesPorId($conexion,$datos){

    $sql = "SELECT * FROM city WHERE city_id = :idCity;";

    $query = $conexion->prepare($sql);
    $query->execute($datos);

    return $query->fetch();

}

function editarCiudades($conexion,$datos){

    $sql="UPDATE actor SET city = :nombreCiudad,country_id = :idCity WHERE city_id = :idCity;";

    return $conexion->prepare($sql)->execute($datos);

}