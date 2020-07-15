<?php
require_once "config/conexion.php";

function obtenerPeliculas($conexion)
{
    $sql = "SELECT film_id,title FROM film;";

    return $conexion->query($sql)->fetchAll();

}
