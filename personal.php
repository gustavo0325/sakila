<?php
//incluir los modelos
require_once "funciones/ayudante.php";
require_once "modelos/modelo_tienda.php";
require_once "modelos/modelo_direccion.php";
require_once "modelos/modelo_personal.php";

$nombrepagina = "Personal";


$nombrePersonal = $_POST['nombre'] ?? "";
$apellidoPersonal = $_POST['apellido'] ?? "";
$direccionPersonal = $_POST['direccion'] ?? "";
$fotoPersonal = $_POST['foto'] ?? "";
$correoPersonal = $_POST['correo'] ?? "";
$tiendaPersonal = $_POST['tienda'] ?? "";
$nombreUsuarioPersonal = $_POST['nombreUsuario'] ?? "";
$contrasenaPersonal = $_POST['contrasena'] ?? "";
$activo = $_POST['activo'] ?? "";

try {
    if (isset($_POST['btnGuardarPersonal'])) {


        if (empty($nombrePersonal)) {
            throw new Exception("El nombre no puede estar vacio");
        }

        if (empty($apellidoPersonal)) {
            throw new Exception("El apellido no puede estar vacio");
        }

        if (empty($direccionPersonal)) {
            throw new Exception("La direccion no puede estar vacia");
        }

        if (empty($fotoPersonal)) {
            throw new Exception("Debes seleccionar una foto..");
        }

        if (empty($correoPersonal)) {
            throw new Exception("El correo no puede estar vacio");
        }

        if (empty($tiendaPersonal)) {
            throw new Exception("El nombre de la tienda no puede estar vacio");
        }

        if (empty($nombreUsuarioPersonal)) {
            throw new Exception("El nombre  del usuario no puede estar vacio");
        }

        if (empty($contrasenaPersonal)) {
            throw new Exception("La contraseña no puede estar vacia");
        }

        if (empty($activo)) {
            throw new Exception("El activo non puede estar vacio");

        }

        $datos = compact('nombrePersonal', 'apellidoPersonal', 'direccionPersonal', 'fotoPersonal', 'correoPersonal', 'tiendaPersonal', 'nombreUsuarioPersonal', 'contrasenaPersonal', 'activo');

//insertarDatos
        $personalInsertado = insertarPersonal($conexion, $datos);

        $mensaje = "Todo esta insertado correctamente";

        if (!$personalInsertado) {

            throw  new Exception("Los datos no se han insertado correctamente");

        }


    }


} catch (Exception $e) {

    $error = $e->getMessage();
}


$tiendas = obtenerTiendas($conexion);
$direcciones = obtenerDireccion($conexion);
$personales = obtenerPersonal($conexion);

include_once "vistas/vistas_personal.php";