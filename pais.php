<?php
require_once "funciones/ayudante.php";
require_once "modelos/modelo_pais.php";

//variable para el titulo de la pag

$nombrepagina = "pais";

//declaro variable para guadar los datos de pais

$pais = $_POST['pais'] ?? "";
$idPais = $_POST['idPais'] ?? "";


//aseguramos que elusuario aga hecho click en el boton guardar

try {
    if (isset($_POST['guardarPais'])) {

        if (empty($pais)) {

            throw new Exception("Elija un pais");
        }

        //preparar el array con los datos
        $datos = compact('pais');

            //insertar los datos
        if (empty($idPais)) {
            $paisInsertado = insertarPais($conexion, $datos);//Lanzar un error si no se inserto correctamente los datos

            $_SESSION['mensaje'] = "Los datos se han insertado correctamente";

            //Lanzar un error si no se inserto correctamente los datos
            if (!$paisInsertado) {

                throw new Exception("Ocurrio un error al insertar los datos del pais");
            }
        } else {

            //Agregar el id al array datos
            $datos['idPais'] = $idPais;


            //actualizar datos
            $paisEditado = editarPaises($conexion, $datos);

            $_SESSION['mensaje'] = "Los datos fueron editados correctamente";

            if (!$paisEditado) {

                throw new Exception("Ocurrio un error al editar los datos");
            }

        }

        //redireccionar la pagina
        header("Location: pais.php", true, 303);

    }


    if (isset($_POST['eliminarPais'])) {
        $idPais = $_POST['eliminarPais'] ?? "";


        //Validar
        if (empty($idPais)) {

            throw new Exception("El id del pais no puede estar vacio");

        }
        //Preparar array
        $datos = compact('idPais');

        //Eliminar
        $eliminado = eliminarPais($conexion, $datos);

        $_SESSION['mensaje'] = "Los datos fueron eliminados correctamente";

        //Lanzar error
        if (!$eliminado) {

            throw new Exception("los datos no se eliminaron correctamente");
        }
    }



    if (isset($_POST['editarPais'])) {
        $idPais = $_POST['editarPais'] ?? "";

        if (empty($idPais)) {

            throw new Exception("El valor del id del pais esta vacio");

        }
        $datos = compact('idPais');

        $resultado = obtenerPaisPorId($conexion, $datos);

        $pais = $resultado['country'];


        //redireccionar la pagina
        header("Location: pais.php", true, 303);

    }
} catch (Exception $e) {

    $error = $e->getMessage();
}

//variable para obtener la tabla pais
$paises = obtenerPaises($conexion);

include_once "vistas/vistas_pais.php";
