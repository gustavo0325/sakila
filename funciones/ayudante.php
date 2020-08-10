<?php
function incluir_vistas($nombre)
{
    include_once "vistas/vista_{$nombre}.php";

}

function ImprimirArrays($arrays)
{
    echo '<pre>';
    print_r($arrays);
    echo '</pre>';

}

//definir la funcion para el manejo de errores

function reportarErrores($numero,$mensaje,$archivo,$linea){
    $codigos =[
    1 => "Error fatal",
    2 => "Advertencia",
    3 => "Aviso",
    ];

    echo "<div class=\"alert alert-warning\"role=\"alert\">
        <h4 class=\"alert-heading\">{$codigos[$numero]}</h4>
        <P>{$mensaje}<P>
        <hr>
        <span>En la linea <b>{$linea}</b>delarchivo <b>{$archivo}</b></span>
        </div>";
}

set_error_handler('reportarErrores');

function
reportarExcepciones($exception){
 echo "<link rel=\"stylesheet\"href=\"static/css/bootstrap.min.css\">";
 echo "<div class=\"alert alert-danger\"role=\"alert\">;
 <h4 class=\"alert-heading\">Ha ocurrido una Excepcion</h4>
        <p>{$exception->getMessage()}</p>
    <hr>
    <span>En la linea
    <b>{$exception->getLine()}</b>del archivo<b>{$exception->getFile()}</b></span></div>";

}

set_exception_handler('reportarExcepciones');


if (session_status() == 1) {
    session_start();
}


function redireccionar($ruta)
{
    header("Location: {$ruta}", true, 303);
}

if (session_status() === 2) {
    $mensaje = $_SESSION['mensaje'] ?? "";


    if (isset($_SESSION['mensaje'])) {
        unset($_SESSION['mensaje']);
    }
}
