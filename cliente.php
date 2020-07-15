<?php
require_once "funciones/helpers.php";
require_once "modelos/modelo_tienda.php";
require_once "modelos/modelo_direccion.php";


$nombrepagina = "cliente";

$nombreCliente = $_POST['nombre'] ?? "";
$apellidoCliente = $_POST['apellido'] ?? "";
$emailCliente = $_POST['email'] ?? "";


if (isset($_POST['guardarInformacion'])) {

    //codigo para la base de datos

}


$tiendas = obtenerTiendas($conexion);
$direcciones = obtenerDireccion($conexion);


include_once "vistas/vistas_cliente.php";