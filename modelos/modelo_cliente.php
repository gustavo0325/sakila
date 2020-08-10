<?php
require_once "config/conexion.php";

function obtenerClientes($conexion)
{
    $sql = "SELECT * from customer ";

    return $conexion->query($sql)->fetchAll();
}

function insertarCliente($conexion, $datos)
{

    $sql = "INSERT INTO customer(customer_id,store_id, first_name, last_name, email, address_id) 
            VALUES (:nombreCliente, :apellidoCliente, :emailCliente, :idTienda, :idDireccion)";

    return $conexion->prepare($sql)->execute($datos);
}