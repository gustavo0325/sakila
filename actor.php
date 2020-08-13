<?php
require_once "funciones/ayudante.php";
require_once "modelos/modelo_actor.php";


$nombrepagina = "Actor";


//declarar variables
$nombreActor = $_POST['nombreActor'] ?? "";
$apellidoActor = $_POST['apellidoActor'] ?? "";
$idActor = $_POST['idActor'] ?? "";

//aseguramos que elusuario aga hecho click en el boton guardar

try {
    if (isset($_POST['guardar_Actor'])) {


        //validar los datos
        if (empty($nombreActor)) {

            throw new Exception("El nombre no puede estar vacio");

        }

        if (empty($apellidoActor)) {

            throw new Exception("El apellido esta vacio. por favor de llenarlo.");
        }

        //preparar el array con los datos
        $datos = compact('nombreActor', 'apellidoActor');


        //insertar los datos
        if (empty($idActor)) {
            $actorInsertado = insertarActores($conexion, $datos);

            $_SESSION['mensaje'] = "Los datos se han insertado correctamente..";

            //Lanzar un error si no se inserto correctamente los datos
            if (!$actorInsertado) {

                throw new Exception("Ocurrio un error al insertar los datos del actor");
            }
        } else {

            //Agregar el id al array datos
            $datos['idActor'] = $idActor;

            //actualizar datos
            $actorEditado = editarActores($conexion, $datos);

            $_SESSION['mensaje'] = "Los datos fueron editados correctamente";


            if (!$actorEditado) {

                throw new Exception("Ocurrio un error al editar los datos");
            }


        }

        //redireccionar la pagina

        redireccionar("actor.php");
    }

    //aseguramos que elusuario aga hecho click en el boton eliminar

    if (isset($_POST['eliminarActor'])) {
        $idActor = $_POST['eliminarActor'] ?? "";


        //Validar
        if (empty($idActor)) {

            throw new Exception("El id actor no puede estar vacio");

        }
        //Preparar array
        $datos = compact('idActor');

        //Eliminar
        $eliminado = eliminarActores($conexion, $datos);

        $_SESSION['mensaje'] = "Los datos fueron eliminados correctamente";

        //Lanzar error
        if (!$eliminado) {

            throw new Exception("los datos no se eliminaron correctamente");
        }

        //redireccionar
        redireccionar("actor.php");
    }


    if (isset($_POST['editarActor'])) {
        $idActor = $_POST['editarActor'] ?? "";

        if (empty($idActor)) {

            throw new Exception("El valor del id esta vacio");

        }

        $datos = compact('idActor');

        $resultado = obtenerActorPorId($conexion, $datos);

        $nombreActor = $resultado['first_name'];
        $apellidoActor = $resultado['last_name'];


    }

} catch (Exception $e) {

    $error = $e->getMessage();
}


$actores = obtenerActores($conexion);


include_once "vistas/vistas_actor.php";