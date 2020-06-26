<?php

$nombrepagina = "cliente";

$nombreCliente = $_GET['nombre'] ?? "";
$apellidoCliente = $_GET['apellido'] ?? "";
$emailCliente = $_GET['email'] ?? "";


if (isset($_GET['guardarInformacion'])){

    //codigo para la base de datos

}








include_once "vistas/vistas_cliente.php";