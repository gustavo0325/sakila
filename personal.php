<?php
//incluir los modelos
require_once "funciones/helpers.php";
require_once "modelos/modelo_tienda.php";
require_once "modelos/modelo_direccion.php";

$nombrepagina = "Personal";
$tiendas = obtenerTiendas($conexion);
$direcciones = obtenerDireccion($conexion);


$nombrePersonal = $_POST['nombre'] ?? "";
$apellidoPersonal = $_POST['apellido'] ?? "";
$direccionPersonal = $_POST['direccion'] ?? "";
$fotoPersonal = $_POST['foto'] ?? "";
$correoPersonal = $_POST['correo'] ?? "";
$tiendaPersonal = $_POST['tienda'] ?? "";
$nombreUsuarioPersonal = $_POST['nombreUsuario'] ?? "";
$contraseñaPersonal = $_POST['contraseña'] ?? "";

if (isset($_POST['btnGuardarPersonal'])) {

    //codigo para la base de datos


};


include_once "vistas/vistas_personal.php";