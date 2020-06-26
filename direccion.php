<?php

$nombrepagina = "Direccion";

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