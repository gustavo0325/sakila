<?php include_once "partes/parte_head.php" ?>

<?php include_once "partes/parte_menu.php" ?>
<h1 class="text-light"> <?php echo $nombrepagina; ?> </h1>

<hr class="bg-light">

<div class="container"
<div class="row">
    <div class="col-md-5">

        <form action="pelicula.php" method="post">

            <?php
            include_once "partes/partes_mensaje.php";
            ?>

            <label for="pelicula">Título de la película: </label>
            <input type="text" name="pelicula" id="pelicula" class="form-control">

            <label class="mt-3" for="descripcion">Descripción:</label>
            <input type="text" name="descripcion" id="descripcion" class="form-control">

            <label class="mt-3" for="añoLanzamiento">Año de lanzamiento:</label>
            <input type="text" name="añoLanzamiento" id="añoLanzamiento" class="form-control">

            <label class="mt-3" for="idiomaOriginal">Idioma original:</label>
            <select class="form-select" name="idiomaOriginal" id="idiomaOriginal">
                <option value="">Selecciona el idioma original de la pelicula</option>

                <?php

                foreach ($idiomas as $idioma) {

                    echo "<option value=\"{$idioma[ language_id]}\">{$idioma['name']}</option>";

                }

                ?>

            </select>

            <label class="mt-3" for="idioma">Idioma:</label>
            <select class="form-select" name="idioma" id="idioma">
                <option value="">Selecciona un idioma</option>


                <?php

                foreach ($idiomas as $idioma) {

                    echo "<option value=\"{$idioma[ language_id]}\">{$idioma['name']}</option>";

                }

                ?>


            </select>

            <label class="mt-3" for="duracionAlquiler">Duración del alquiler:</label>
            <input type="datetime-local" name="duracionAlquiler" id="duracionAlquiler" class="form-control">

            <label class="mt-3" for="tarifaAlquiler">Tarifa del alquiler:</label>
            <input type="text" class="form-control" name="tarifaAlquiler" id="tarifaAlquiler">

            </input>

            <label class="mt-3" for="tamaño">tamaño:</label>
            <input type="text" name="tamaño" id="tamaño" class="form-control">


            <label class="mt-3" for="costoDeReemplazo">costo de reemplazo:</label>
            <input type="text" name="costoDeReemplazo" id="costoDeReemplazo" class="form-control">

            <label class="mt-3" for="clasificacion">clasificacion:</label>
            <input type="text" name="clasificacion" id="clasificacion" class="form-control">

            <label class="mt-3" for="caracteristicasEspeciales">Características especiales:</label>
            <input type="text" name="caracteristicasEspeciales" id="caracteristicasEspeciales" class="form-control">

            <button type="submit" name="btnGuardarPelicula" class="btn btn-primary mt-3">Guardar Datos</button>

        </form>


    </div>

</div>


<hr class="bg-light">

<?php if (empty($peliculas)) { ?>
    <div class="alert alert-info" role="alert">
        <img src="static/img/empty.svg" alt="imagen vacia" width="100px">
        No hay datos registrados..
    </div>
<?php } else{ ?>
<div class="container">
<div class="row">
    <div class="col-md-12">

        <table class="table table-hover table-dark table-striped">

            <thead>
            <th scope="col">ID de la pelicula</th>
            <th scope="col">Nombre de la pelicula</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Año lanzamiento</th>
            <th scope="col">IDidioma</th>
            <th scope="col">ID idioma original</th>
            <th scope="col">renta duracion</th>
            <th scope="col">Longitud</th>
            <th scope="col">Costo de reemplazo</th>
            <th scope="col">Rating</th>
            <th scope="col">Caracteristcas especiales</th>


            </thead>

            <tbody>

            <?php
            foreach ($peliculas as $pelicula) {


                echo "<tr>
                <th scope=\"row\">{$pelicula['film_id']}</th>
                <td>{$pelicula['title']}</td>
                <td>{$pelicula['description']}</td>
                 <td>{$pelicula['release_year']}</td>
                  <td>{$pelicula['language_id']}</td>
                   <td>{$pelicula['original_language_id']}</td>
                    <td>{$pelicula['rental_duration']}</td>
                     <td>{$pelicula['rental_rate']}</td>
                      <td>{$pelicula['length']}</td>
                       <td>{$pelicula['replacement_cost']}</td>
                        <td>{$pelicula['rating']}</td>
                         <td>{$pelicula['special_features']}</td>
                 
               
            </tr>";
            }

            ?>

            </tbody>

        </table>
    </div>
</div>

    <?php } ?>
</div>




















