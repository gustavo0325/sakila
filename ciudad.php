<?php

$nombrepagina =  "ciudad";


//declarar variables
$pais = $_GET['pais'] ?? "";
$ciudad = $_GET['ciudad'] ?? "";

if (isset($_GET['guardarCiudad'])){

  //codigo para la base de datos

};


include_once "vistas/vistas_ciudad.php";