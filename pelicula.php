<?php
require_once "funciones/ayudante.php";
require_once "modelos/modelo_idioma.php";
require_once "modelos/modelo_peliculas.php";


$nombrepagina = "Pelicula";


        $pelicula = $_POST['pelicula'] ?? "";
        $descripcion = $_POST['descripcion'] ?? "";
        $anoLanzamiento = $_POST['añoLanzamiento'] ?? "";
        $idIdioma = $_POST['idioma'] ?? "";
        $idIdiomaOriginal = $_POST['idiomaOriginal'] ?? "";
        $duracionAlquiler = $_POST['duracionAlquiler'] ?? "";
        $tarifaAlquiler = $_POST['tarifaAlquiler'] ?? "";
        $tamaño = $_POST['tamaño'] ?? "";
        $costoDeReemplazo = $_POST['costoDeReemplazo'] ?? "";
        $clasificacion = $_POST['clasificacion'] ?? "";
        $caracteristicasEspeciales = $_POST['caracteristicasEspeciales'] ?? "";


try {
    if (isset($_POST['btnGuardarPelicula'])) {

        if (empty($pelicula)) {
            throw new Exception("El titulo de la pelicula no puede estar vacio");
        }

        if (empty($descripcion)) {
            throw new Exception("La descripcion no puede estar vacia");
        }

        if (empty($anoLanzamiento)) {
            throw new Exception("El año no puede estar vacio");
        }

        if (empty($idIdioma)) {
            throw new Exception("Debes seleccionar una idioma");
        }

        if (empty($idIdiomaOriginal)) {
            throw new Exception("Debes seleccionar el idioma original");
        }

        if (empty($duracionAlquiler)) {
            throw new Exception("La duracion del alquiler no puede estar vacia");
        }

        if (empty($tarifaAlquiler)) {
            throw new Exception("la tarifa no puede estar vacia");
        }

        if (empty($tamaño)) {
            throw new Exception("el tamaño no puede estar vacio");
        }

        if (empty($costoDeReemplazo)) {
            throw new Exception("El costo de reemplazo no puede esta vacio");

        }

        if (empty($clasificacion)) {
            throw new Exception("la clasificacion no puede estar vacia");

        }

        if (empty($caracteristicasEspeciales)) {
            throw new Exception("Las caracteristicas especiales no puden estar vacia");

        }

        $datos= compact('pelicula','descripcion','anoLanzamiento','idIdioma','idIdiomaOriginal',
        'duracionAlquiler','tarifaAlquiler','tamaño','costoDeReemplazo','clasificacion','caracteristicasEspeciales');


        $peliculaInsertada = insertarpeliculas ($conexion,$datos);

        $_SESSION['mensaje']= "Los datos se insertaron correctamente";

        if (!$peliculaInsertada) {

            throw  new Exception("Los datos no se han insertado correctamente");

        }

        redireccionar("pelicula.php");

    }
} catch (Exception $e) {
    $error = $e->getMessage();
}

        $peliculas = obtenerPeliculas($conexion);
        $idiomas = obtenerIdiomas($conexion);

        include_once "vistas/vistas_pelicula.php";