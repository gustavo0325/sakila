<?php
require_once "config/conexion.php";

function obtenerPaises($conexion){

    $sql = "SELECT * FROM country;";


    return $conexion->query($sql)->fetchAll();

}