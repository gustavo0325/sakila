<?php
require_once "config/conexion.php";

function obtenerClientes($conexion)
{
    $sql = "SELECT * from customer ";

    return $conexion->query($sql)->fetchAll();
}

function insertarCliente($conexion, $datos){

    $sql = "INSERT INTO customer (store_id, first_name, last_name, email, address_id, active) 
            VALUES (:idTienda, :nombreCliente, :apellidoCliente, :emailCliente, :idDireccion, :activo);";

    return $conexion->prepare($sql)->execute($datos);
}