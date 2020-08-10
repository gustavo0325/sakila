<?php
require_once "config/conexion.php";

function obtenerPersonal($conexion)
{

    $sql = "select * from staff;";

    return $conexion->query($sql)->fetchAll();

}


function insertarPersonal($conexion, $datos)
{
    $sql = "Insert INTO staff(first_name, last_name,address_id,picture,email,store_id,active,username,password) VALUES (:nombrePersonal,:apellidoPersonal,:direccionPersonal,:fotoPersonal,:correoPersonal,:tiendaPersonal,:nombreUsuarioPersonal,:contrasenaPersonal,:activo);";

    return $conexion->prepare($sql)->execute($datos);


}