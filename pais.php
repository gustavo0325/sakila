<?php
//variable para el titulo de la pag

$nombrepagina = "pais";

//declaro variable para guadar los datos de pais

$Pais = $_GET['pais'] ?? "";


if (isset($_GET['guardarPais'])){


    //codigo para la base de datos
};


include_once "vistas/vistas_pais.php";