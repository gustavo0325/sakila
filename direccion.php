<?php
//incluir los modelos
require_once "funciones/helpers.php";
require_once "modelos/modelo_ciudad.php";
require_once "modelos/modelo_direccion.php";

$nombrepagina = "Direccion";

$ciudades = obtenerCiudades($conexion);
$direcciones = obtenerDireccion($conexion);


//declarar variable para enviar los archivos

$direccion = $_POST['direccion'] ?? "";
$direccion2 = $_POST['direccion2'] ?? "";
$distrito = $_POST['distrito'] ?? "";
$ciudad = $_POST['ciudad'] ?? "";
$codigoPostal = $_POST['codigoPostal'] ?? "";
$telefono = $_POST['telefono'] ?? "";
$ubicacion = $_POST['ubicacion'] ?? "";

//cuando el usuario haga click en el boton guardarDireccion
if (isset($_POST['guardarDireccion'])) {

    //codigo para la base de datos


};


include_once "vistas/vistas_direccion.php";