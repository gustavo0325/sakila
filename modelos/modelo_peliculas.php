<?php
require_once "config/conexion.php";

function obtenerPeliculas($conexion)
{
    $sql = "SELECT * FROM film;";

    return $conexion->query($sql)->fetchAll();

}


function insertarpeliculas($conexion, $datos)
{
    $sql = "Insert INTO film (film_id, title, description, release_year, language_id, original_language_id, 
                        rental_duration,rental_rate, length, replacement_cost, rating, special_features, last_update) 
                        VALUES (:pelicula,:descripcion,:anoLanzamiento,:idIdioma,;idIdiomaOriginal,
        :duracionAlquiler,:tarifaAlquiler,:tamaño,:costoDeReemplazo,:clasificacion,:caracteristicasEspeciales);";

    return $conexion->prepare($sql)->execute($datos);


}
