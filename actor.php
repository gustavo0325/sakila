<?php

$nombrepagina = "Actor";



//declarar las variables

$actor = $_GET['nombreActor'] ??"";
$apellidoActor = $_GET['apellidoActor'] ??"";


//asegurarnos de que el usurio haya hecho click en el boton guardar Actor
if (isset($_GET['guardar_actor'])){

    //codigo para guardar en la base de datos

};

include_once "vistas/vistas_actor.php";
