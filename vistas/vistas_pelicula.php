
<?php include_once "partes/parte_head.php"?>

<?php include_once "partes/parte_menu.php"?>



<hr class="bg-light">

<div class="container"
<div class="row">
    <div class="col-md-5">

            <form action="actor.php" method="get">

                <label for="pelicula">Título de la película: </label>
                <input type="text" name="pelicula" id="pelicula" class="form-control">

                <label class="mt-3" for="descripcion">Descripción:</label>
                <input type="text" name="descripcion" id="descripcion" class="form-control">

                <label class="mt-3" for="añoLanzamiento">Año de lanzamiento:</label>
                <input type="text" name="añoLanzamiento" id="añoLanzamiento" class="form-control">

                <label class="mt-3" for="idioma">Idioma:</label>
                <select class="form-select" name="idioma" id="idioma">
                    <option value="">Aqui va el listado de la ciudad desde MySQL</option>
                </select>

                <label class="mt-3" for="duracionAlquiler">Duración del alquiler:</label>
                <input type="datetime-local" name="duracionAlquiler" id="duracionAlquiler" class="form-control">

                <label class="mt-3" for="tarifaAlquiler">Tarifa del alquiler:</label>
                <select class="form-select" name="tarifaAlquiler" id="tarifaAlquiler">
                    <option value="">Aqui va el listado de la ciudad desde MySQL</option>
                </select>

                <label class="mt-3" for="costoReemplazo">Costo de reemplazo:</label>
                <input type="text" name="costoReemplazo" id="costoReemplazo" class="form-control">


                <label class="mt-3" for="duracionPelicula">Duración de la película:</label>
                <input type="time" name="duracionPelicula" id="duracionPelicula" class="form-control">

                <label class="mt-3" for="caracteristicasPelicula">Características de la película:</label>
                <input type="text" name="caracteristicasPelicula" id="caracteristicasPelicula" class="form-control">

                <button type="submit" name="btnGuardarPelicula" class="btn btn-primary mt-3">Guardar Datos</button>

            </form>

        <br>

        </div>

    </div>

</div>





















