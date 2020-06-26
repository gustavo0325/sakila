<?php
$nombrepagina = "Pelicula";



$pelicula =$_GET['pelicula'] ?? "";
$descripcion =$_GET['descripcion'] ?? "";
$añoLanzamiento =$_GET['añoLanzamiento'] ?? "";
$idioma =$_GET['idioma'] ?? "";
$duracionAlquiler =$_GET['duracionAlquiler'] ?? "";
$tarifaAlquiler =$_GET['tarifaAlquiler'] ?? "";
$costoReemplazo =$_GET['costoReemplazo'] ?? "";
$duracionPelicula =$_GET['duracionPelicula'] ?? "";
$caracteristicasPelicula =$_GET['caracteristicasPelicula'] ?? "";

if (isset($_GET['btnGuardarPelicula'])){

    //guardar datos de base de datos

}


include_once "vistas/vistas_pelicula.php";