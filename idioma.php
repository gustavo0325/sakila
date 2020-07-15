<?php
//incluir los modelos
require_once "funciones/helpers.php";
require_once "modelos/modelo_idioma.php";

$nombrepagina = "Idioma";
$idiomas = obtenerIdiomas($conexion);

//daclarar variable para idioma

$nombreIdioma = $_POST['idioma'] ?? "";


//if para saber cuando el usuario haga click

if (isset($_POST['guardarIdioma'])) {

    //codigo para la base de datos
};
//variable para obtener la tabla idioma
$idiomas = obtenerIdiomas($conexion);


include_once "vistas/vistas_idioma.php";