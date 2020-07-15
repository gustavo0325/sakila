<?php
require_once "funciones/helpers.php";
require_once "modelos/modelo_tienda.php";
require_once "modelos/modelo_direccion.php";


$nombrepagina = "cliente";

$nombreCliente = $_GET['nombre'] ?? "";
$apellidoCliente = $_GET['apellido'] ?? "";
$emailCliente = $_GET['email'] ?? "";


if (isset($_GET['guardarInformacion'])){

    //codigo para la base de datos

}


$tiendas = obtenerTiendas ($conexion);
$direcciones = obtenerDireccion($conexion);




include_once "vistas/vistas_cliente.php";