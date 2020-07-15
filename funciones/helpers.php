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