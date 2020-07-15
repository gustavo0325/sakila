<?php
require_once "funciones/helpers.php";
require_once "modelos/modelo_pais.php";
require_once "modelos/modelo_ciudad.php";

$nombrepagina = "ciudad";

$paises = obtenerPaises($conexion);
$ciudades = obtenerCiudades($conexion);

//declarar variables
$pais = $_POST['pais'] ?? "";
$ciudad = $_POST['ciudad'] ?? "";

if (isset($_POST['guardarCiudad'])) {

    //codigo para la base de datos

};


include_once "vistas/vistas_ciudad.php";