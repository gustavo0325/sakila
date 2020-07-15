<?php
require_once "funciones/helpers.php";
require_once "modelos/modelo_idioma.php";
require_once "modelos/modelo_peliculas.php";


$nombrepagina = "Pelicula";


$pelicula =$_GET['pelicula'] ?? "";
$descripcion =$_GET['descripcion'] ?? "";
$añoLanzamiento =$_GET['añoLanzamiento'] ?? "";
$idioma =$_GET['idioma'] ?? "";
$idiomaOriginal =$_GET['idiomaOriginal'] ?? "";
$duracionAlquiler =$_GET['duracionAlquiler'] ?? "";
$tarifaAlquiler =$_GET['tarifaAlquiler'] ?? "";
$tamaño =$_GET['tamaño'] ?? "";
$costoDeReemplazo =$_GET['costoDeReemplazo'] ?? "";
$clasificacion =$_GET['clasificacion'] ?? "";
$caracteristicasEspeciales =$_GET['caracteristicasEspeciales'] ?? "";

if (isset($_GET['btnGuardarPelicula'])){

    //guardar datos de base de datos

}
$peliculas = obtenerPeliculas($conexion);
$idiomas = obtenerIdiomas($conexion);

include_once "vistas/vistas_pelicula.php";