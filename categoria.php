<?php
require_once "modelos/modelo_categoria.php";
require_once "funciones/helpers.php";
$nombrepagina = "Categoria";

$categoria = $_POST['categoria'] ?? "";


if (isset($_POST['guardarCategoria'])) {


    //codigo para la base de datos
}


//variable para la tabla categoria
$categorias = obtenerCategorias($conexion);


include_once "vistas/vistas_categoria.php";