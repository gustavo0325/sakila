<?php include_once "partes/parte_head.php" ?>

<?php include_once "partes/parte_menu.php" ?>
<h1 class="text-light"> <?php echo $nombrepagina; ?> </h1>

<hr class="bg-light">

<div class="container"
<div class="row">
    <div class="col-md-5">

        <form action="pelicula.php" method="post">

            <?php

            if (isset($error)) {
                echo "  <div class=\"alert alert-danger alert-dismissible fade show mt-3\" role=\"alert\">

                                {$error}
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>";
            }


            if (isset($peliculaInsertada)) {

                echo "  <div class=\"alert alert-success alert-dismissible fade show mt-3\" role=\"alert\">
                                los datos se han insertado correctamente
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>";

            }

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

                    echo "<option value=\"{$idioma[ language_id]}}\">{$idioma['name']}</option>";

                }

                ?>

            </select>

            <label class="mt-3" for="idioma">Idioma:</label>
            <select class="form-select" name="idioma" id="idioma">
                <option value="">Selecciona un idioma</option>


                <?php

                foreach ($idiomas as $idioma) {

                    echo "<option value=\"{$idioma[ language_id]}}\">{$idioma['name']}</option>";

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

<div class="row container">
    <div class="col-md-5">

        <table class="table table-hover table-dark table-striped">

            <thead>
            <th scope="col">ID de la pelicula</th>
            <th scope="col">Nombre de la pelicula</th>

            </thead>

            <tbody>

            <?php
            foreach ($peliculas as $pelicula) {


                echo "<tr>
                <th scope=\"row\">{$pelicula['film_id']}</th>
                <td>{$pelicula['title']}</td>
               
            </tr>";
            }

            ?>

            </tbody>

        </table>
    </div>
</div>





















