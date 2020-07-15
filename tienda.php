<?php
//incluir los modelos
require_once "funciones/helpers.php";
require_once "modelos/modelo_tienda.php";
require_once "modelos/modelo_direccion.php";

$nombrepagina = "Tienda";
$tiendas = obtenerTiendas($conexion);
$direcciones = obtenerDireccion($conexion);
$informaciontiendas = obtenerinformacionTiendas($conexion);




include_once "vistas/vistas_tienda.php";