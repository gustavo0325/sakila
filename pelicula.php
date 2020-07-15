<?php
require_once "funciones/helpers.php";
require_once "modelos/modelo_idioma.php";
require_once "modelos/modelo_peliculas.php";


$nombrepagina = "Pelicula";


$pelicula = $_POST['pelicula'] ?? "";
$descripcion = $_POST['descripcion'] ?? "";
$añoLanzamiento = $_POST['añoLanzamiento'] ?? "";
$idioma = $_POST['idioma'] ?? "";
$idiomaOriginal = $_POST['idiomaOriginal'] ?? "";
$duracionAlquiler = $_POST['duracionAlquiler'] ?? "";
$tarifaAlquiler = $_POST['tarifaAlquiler'] ?? "";
$tamaño = $_POST['tamaño'] ?? "";
$costoDeReemplazo = $_POST['costoDeReemplazo'] ?? "";
$clasificacion = $_POST['clasificacion'] ?? "";
$caracteristicasEspeciales = $_POST['caracteristicasEspeciales'] ?? "";

if (isset($_POST['btnGuardarPelicula'])) {

    //guardar datos de base de datos

}
$peliculas = obtenerPeliculas($conexion);
$idiomas = obtenerIdiomas($conexion);

include_once "vistas/vistas_pelicula.php";