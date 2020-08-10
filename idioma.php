<?php
//incluir los modelos
require_once "funciones/ayudante.php";
require_once "modelos/modelo_idioma.php";

$nombrepagina = "Idioma";

//daclarar variable para idioma

$nombreIdioma = $_POST['idioma'] ?? "";
$idIdioma = $_POST['idIdioma'] ?? "";
//if para saber cuando el usuario haga click

try {
    if (isset($_POST['guardarIdioma'])) {

        if (empty($nombreIdioma)) {

            throw new Exception("Elija un idioma");

        }

        //preparar el array con los datos
        $datos = compact('nombreIdioma');

        //insertar los datos

        if (empty($idIdioma)) {
            $idiomaInsertado = insertarIdiomas($conexion, $datos);//mensaje para informar si se an insertado los datos correctamente
            $_SESSION['mensaje'] = "Los datos se han insertado correctamente..";


            //Lanzar un error si no se inserto correctamente los datos
            if (!$idiomaInsertado) {

                throw new Exception("Ocurrio un error al insertar los datos del actor");
            }
        } else {
            //Agregar el id al array datos
            $datos['idIdioma'] = $idIdioma;

            //actualizar datos
            $idiomaEditado = editarIdiomas($conexion, $datos);

            $_SESSION['mensaje'] = "Los datos fueron editados correctamente";


            if (!$idiomaEditado) {

                throw new Exception("Ocurrio un error al editar los datos");
            }

        }
        //redireccionar la pagina

        header("Location: idioma.php", true, 303);

    }
    //aseguramos que elusuario aga hecho click en el boton eliminar

    if (isset($_POST['eliminarIdioma'])) {
        $idIdioma = $_POST['eliminarIdioma'] ?? "";


        //Validar
        if (empty($idIdioma)) {

            throw new Exception("El id del idioma no puede estar vacio");

        }
        //Preparar array
        $datos = compact('idIdioma');

        //Eliminar
        $eliminado = eliminarIdioma($conexion, $datos);

        $_SESSION['mensaje'] = "Los datos fueron eliminados correctamente";

        //Lanzar error
        if (!$eliminado) {

            throw new Exception("los datos no se eliminaron correctamente");
        }

        //redireccionar
        header("Location:idioma.php", true, 303);

    }


    if (isset($_POST['editarIdioma'])) {
        $idIdioma = $_POST['editarIdioma'] ?? "";

        if (empty($idIdioma)) {

            throw new Exception("El valor del id esta vacio");

        }

        $datos = compact('idIdioma');

        $resultado = obtenerIdiomasPorId($conexion, $datos);

        $nombreIdioma = $resultado['name'];


    }


} catch
(Exception $e) {

    $error = $e->getMessage();
}
//variable para obtener la tabla idioma
$idiomas = obtenerIdiomas($conexion);


include_once "vistas/vistas_idioma.php";