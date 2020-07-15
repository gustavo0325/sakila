<?php
require_once "funciones/helpers.php";
require_once "modelos/modelo_actor.php";

$nombrepagina = "Actor";

//declarar las variables

$nombreActor = $_POST['nombreActor'] ?? "";
$apellidoActor = $_POST['apellidoActor'] ?? "";


//asegurarnos de que el usurio haya hecho click en el boton guardar Actor
if (isset($_POST['guardar_actor'])) {


    ImprimirArrays($_POST);

//validar los datos
    //TODO

    $datos = compact('nombreActor', 'apellidoActor');


    //insertar los datos
    $insertado = insertarActores($conexion, $datos);

    if ($insertado) {

        echo "Datos insertados correctamente.";
    } else {
        echo "NO se insertaron los datos.";
    }

};

//variable para la tabla actores

$actores = obtenerActores($conexion);

include_once "vistas/vistas_actor.php";
