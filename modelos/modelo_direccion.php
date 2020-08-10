<?php

require_once "config/conexion.php";

function obtenerDireccion($conexion)
{
    $sql = "SELECT address_id,address,address2,district,city_id,postal_code,phone,last_update FROM address ;";


    return $conexion->query($sql)->fetchAll();

}


function insertarDireccion($conexion, $datos){

    $sql = "INSERT INTO address (address, address2, district, city_id, postal_code, phone, ) 
            VALUES (:direccion, :direccion2, :distrito, :ciudad, :codigoPostal, :telefono);";

    return $conexion->prepare($sql)->execute($datos);

}