<?php
require_once "funciones/ayudante.php";
require_once "modelos/modelo_tienda.php";
require_once "modelos/modelo_direccion.php";
require_once "modelos/modelo_cliente.php";


$nombrepagina = "cliente";

$nombreCliente = $_POST['nombre'] ?? "";
$apellidoCliente = $_POST['apellido'] ?? "";
$emailCliente = $_POST['email'] ?? "";
$idTienda = $_POST['tienda'] ?? "";
$idDireccion = $_POST['direccion'] ?? "";
$activo = $_POST['activo'] ?? "";


try {
    if (isset($_POST['guardarInformacion'])) {

        if (empty($nombreCliente)) {
            throw new Exception("El nombre no puede estar vacio");
        }

        if (empty($apellidoCliente)) {
            throw new Exception("El apellido no puede estar vacio");
        }

        if (empty($emailCliente)) {
            throw new Exception("El email no puede estar vacio");
        }

        if (empty($idTienda)) {
            throw new Exception("Debes seleccionar una tienda..");
        }

        if (empty($idDireccion)) {
            throw new Exception("Debes seleccionar una direccion..");
        }


        //insertar datos
        $datos = compact('nombreCliente', 'apellidoCliente', 'emailCliente', 'idTienda', 'idDireccion', 'activo');

        $ClienteInsertado = insertarCliente($conexion, $datos);

        $_SESSION['mensaje'] = "Los datos se insertaron correctamente";

        if (!$ClienteInsertado) {

            throw  new Exception("Error los datos no se han insertado correctamente");

        }

        //redireccionar la pag
        redireccionar("cliente.php");
    }
} catch (Exception $e) {

    $error = $e->getMessage();
}


$tiendas = obtenerTiendas($conexion);
$direcciones = obtenerDireccion($conexion);
$clientes = obtenerClientes($conexion);


include_once "vistas/vistas_cliente.php";