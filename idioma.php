<?php

$nombrepagina = "Idioma";

//daclarar variable para idioma

$nombreIdioma = $_GET['idioma'] ?? "";


//if para saber cuando el usuario haga click

if (isset($_GET['guardarIdioma'])){

    //codigo para la base de datos
};



include_once "vistas/vistas_idioma.php";