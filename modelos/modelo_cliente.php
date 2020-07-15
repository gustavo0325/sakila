<?php
require_once "config/conexion.php";

function obtenerClientes($conexion)
{
    $sql = "SELECT customer_id, store_id FROM customer;";


    return $conexion->query($sql)->fetchAll();
}