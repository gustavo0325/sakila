<?php
//incluir los modelos
require_once "funciones/helpers.php";
require_once "modelos/modelo_tienda.php";
require_once "modelos/modelo_direccion.php";

$nombrepagina = "Personal";
$tiendas = obtenerTiendas($conexion);
$direcciones = obtenerDireccion($conexion);


$nombrePersonal = $_GET['nombre'] ?? "";
$apellidoPersonal = $_GET['apellido'] ?? "";
$direccionPersonal = $_GET['direccion'] ?? "";
$fotoPersonal = $_GET['foto'] ?? "";
$correoPersonal = $_GET['correo'] ?? "";
$tiendaPersonal = $_GET['tienda'] ?? "";
$nombreUsuarioPersonal = $_GET['nombreUsuario'] ?? "";
$contraseñaPersonal = $_GET['contraseña'] ?? "";

if (isset($_GET['btnGuardarPersonal'])){

    //codigo para la base de datos


};






include_once "vistas/vistas_personal.php";