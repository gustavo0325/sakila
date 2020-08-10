<?php
require_once "funciones/ayudante.php";
require_once "modelos/modelo_categoria.php";


$nombrepagina = "categoria";


//declarar variables

$categoria = $_POST['categoria'] ?? "";
$idCategoria = $_POST['idCategoria'] ?? "";


try {
    if (isset($_POST['guardarCategoria'])) {
        if (empty($categoria)) {

            throw new Exception("La categoria no puede estar vacia");

        }

        $datos = compact('categoria');//insertar los datos

        if (empty($idCategoria)) { //preparar  los datos
            $categoriaInsertada = insertarCategoria($conexion, $datos);//Lanzar un error si no se inserto correctamente los datos

            $_SESSION['mensaje'] = "Los datos se an insertado correctamente";

            if (!$categoriaInsertada) {

                throw new Exception("Ocurrio un error al insertar los datos de categoria");
            }

        } else {

            //Agregar el id al array datos
            $datos['idCategoria'] = $idCategoria;


            //actualizar datos
            $categoriaEditada = editarCategoria($conexion, $datos);

            $_SESSION['mensaje'] = "Los datos fueron editados correctamente";

            if (!$categoriaEditada) {

                throw new Exception("Ocurrio un error al editar los datos");
            }


        }


        //redireccionar la pagina
        header("Location: categoria.php", true, 303);

    }


    if (isset($_POST['eliminarCategoria'])) {
        $idCategoria = $_POST['eliminarCategoria'] ?? "";


        //Validar
        if (empty($idCategoria)) {

            throw new Exception("El id de la categoria no puede estar vacio");

        }
        //Preparar array
        $datos = compact('idCategoria');

        //Eliminar
        $eliminado = eliminarCategorias($conexion, $datos);
        $_SESSION['mensaje'] = "Los datos fueron eliminados correctamente";

        //Lanzar error
        if (!$eliminado) {

            throw new Exception("los datos no se eliminaron correctamente");
        }

        //redireccionar
        header("Location:categoria.php", true, 303);

    }


    if (isset($_POST['editarCategoria'])) {
        $idCategoria = $_POST['editarCategoria'] ?? "";

        if (empty($idCategoria)) {

            throw new Exception("El valor del id de la categoria esta vacio");

        }

        $datos = compact('idCategoria');

        $resultado = obtenerCategoriaPorId($conexion, $datos);

        $categoria = $resultado['name'];



    }
} catch (Exception $e) {

    $error = $e->getMessage();
}

$categorias = obtenerCategorias($conexion);


include_once "vistas/vistas_categoria.php";