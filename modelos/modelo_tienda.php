<?php
require_once "config/conexion.php";

function obtenerTiendas($conexion){

    $sql = "select store_id,manager_staff_id,address_id from store ";


    return $conexion->query($sql)->fetchAll();

}


function obtenerinformacionTiendas($conexion){

    $sql="SELECT sto.store_id, sto.manager_staff_id,sto.address_id,sta.first_name, a.address
          FROM STORE AS sto
          LEFT JOIN staff AS sta ON sto.manager_staff_id = sta.staff_id
          LEFT JOIN address AS a ON sto.address_id = a.address_id;";


    return $conexion->query($sql)->fetchAll();
}