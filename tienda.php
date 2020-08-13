<?php
//incluir los modelos
require_once "funciones/ayudante.php";
require_once "modelos/modelo_tienda.php";
require_once "modelos/modelo_direccion.php";

$nombrepagina = "Tienda";

$manager = $_POST['manager'] ?? "";
$direccion1 = $_POST['direccion1'] ?? "";

if (isset($_POST['guardarTienda'])) {

}


$tiendas = obtenerTiendas($conexion);
$direcciones = obtenerDireccion($conexion);
$informaciontiendas = obtenerinformacionTiendas($conexion);


include_once "vistas/vistas_tienda.php";