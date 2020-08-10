<?php
require_once "funciones/ayudante.php";
require_once "modelos/modelo_pais.php";
require_once "modelos/modelo_ciudad.php";

$nombrepagina = "Ciudad";


//declarar variables
$idPais = $_POST['pais'] ?? "";
$nombreCiudad = $_POST['ciudad'] ?? "";
$idCity = $_POST['idCity'] ?? "";


try {
    if (isset($_POST['guardarCiudad'])) {

        //validar datos
        if (empty($idPais)) {
            throw new Exception("Debes seleccionar un pais");
        }

        if (empty($nombreCiudad)) {
            throw new Exception("El nombre de la ciudad no puede estar vacio");
        }

        //preparar el array con los datos
        $datos = compact('nombreCiudad', 'idPais');


        if (empty($idCity)) { //insertar los datos
            $ciudadInsertada = insertarCiudades($conexion, $datos);

            $_SESSION['mensaje'] = "Los datos se insertaron correctamente";

            //Lanzar error por si no se han insertado los datos
            if (!$ciudadInsertada) {

                throw new Exception("Error al insertar los datos");
            }

        } else {

            $datos['idCity'] = $idCity;

            //actualizar datos

            $ciudadEditada = editarCiudades($conexion, $datos);

            $_SESSION['mensaje'] = "los datos se editaron correctamente..";

            if (!$ciudadEditada) {

                throw new Exception("Ocurrio un error al editar los datos");

            }

        }

        //redirrecionar la pagina

        header("Location:ciudad.php", true, 303);

    }


    if (isset($_POST['eliminarCiudad'])) {
        $idCity = $_POST['eliminarCiudad'] ?? "";


        //Validar
        if (empty($idCity)) {

            throw new Exception("El id de la ciudad no puede estar vacio");

        }
        //Preparar array
        $datos = compact('idCity');

        //Eliminar
        $eliminado = eliminarCiudades($conexion, $datos);
        $_SESSION['mensaje'] = "Los datos fueron eliminados correctamente";

        //Lanzar error
        if (!$eliminado) {

            throw new Exception("los datos no se eliminaron correctamente");
        }

        //redireccionar
        header("Location:ciudad.php", true, 303);
    }


    if (isset($_POST['editarCiudad'])) {

        $idCity = $_POST['editarCiudad'] ?? "";


        if (empty($idCity)) {

            throw new Exception("El valor del id dela ciudad esta vacio");

        }

        $datos = compact('idCity');

        $resultados = obtenerCiudadesPorId($conexion, $datos);

        $nombreCiudad = $resultados['city'];
        $idPais = $resultados['country_id'];

    }



} catch (Exception $e) {
    $error = $e->getMessage();


}

$paises = obtenerPaises($conexion);
$ciudades = obtenerCiudades($conexion);

include_once "vistas/vistas_ciudad.php";