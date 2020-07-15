<?php
//incluir los modelos
require_once "funciones/helpers.php";
require_once "modelos/modelo_ciudad.php";
require_once "modelos/modelo_direccion.php";

$nombrepagina = "Direccion";

$ciudades = obtenerCiudades($conexion);
$direcciones = obtenerDireccion($conexion);


//declarar variable para enviar los archivos

$direccion = $_GET['direccion'] ?? "";
$direccion2 =$_GET['direccion2'] ?? "";
$distrito = $_GET['distrito'] ?? "";
$ciudad = $_GET['ciudad'] ?? "";
$codigoPostal= $_GET['codigoPostal'] ?? "";
$telefono = $_GET['telefono'] ?? "";
$ubicacion = $_GET['ubicacion'] ?? "";

//cuando el usuario haga click en el boton guardarDireccion
if (isset($_GET['guardarDireccion'])){

    //codigo para la base de datos


};



include_once "vistas/vistas_direccion.php";