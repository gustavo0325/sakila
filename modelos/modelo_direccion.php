<?php

require_once "config/conexion.php";

function obtenerDireccion ($conexion)
{
    $sql = "SELECT address_id, address FROM address;";


    return $conexion->query($sql)->fetchAll();
}