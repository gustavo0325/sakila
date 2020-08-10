<?php
//incluir los modelos
require_once "funciones/ayudante.php";
require_once "modelos/modelo_ciudad.php";
require_once "modelos/modelo_direccion.php";

$nombrepagina = "Direccion";

//declarar variable para enviar los archivos

$direccion = $_POST['direccion'] ?? "";
$direccion2 = $_POST['direccion2'] ?? "";
$distrito = $_POST['distrito'] ?? "";
$ciudad = $_POST['ciudad'] ?? "";
$codigoPostal = $_POST['codigoPostal'] ?? "";
$telefono = $_POST['telefono'] ?? "";

ImprimirArrays($_POST);
//cuando el usuario haga click en el boton guardarDireccion
try {
    if (isset($_POST['guardarDireccion'])) {

        //validar los datos
        if (empty($direccion)) {
            throw new Exception("La direccion no puede estar vacia");
        }

        if (empty($direccion2)) {
            throw new Exception("La direccion2 no puede estar vacia");
        }

        if (empty($distrito)) {
            throw new Exception("El distrito no puede estar vacia");
        }

        if (empty($ciudad)) {
            throw new Exception("Debes seleccionar una ciudad..");
        }

        if (empty($codigoPostal)) {
            throw new Exception("El codigo postal no puede estar vacio");
        }

        if (empty($telefono)) {
            throw new Exception("El telefono no puede estar vacio");
        }



        $datos = compact('direccion', 'direccion2', 'distrito', 'ciudad', 'codigoPostal', 'telefono');

//insertarDatos
        $direccionInsertada = insertarDireccion($conexion, $datos);

        $_SESSION['mensaje'] = "los datos se han insertado corectamente..";


        if (!$direccionInsertada) {

            throw  new Exception("Los datos no se han insertado correctamente");

        }

        //redireccionar la pagina
        header("Location: direccion.php", true, 303);

    };
} catch (Exception $e) {

    $error = $e->getMessage();

}
        $ciudades = obtenerCiudades($conexion);
        $direcciones = obtenerDireccion($conexion);

include_once "vistas/vistas_direccion.php";