<?php include_once "partes/parte_head.php" ?>

<?php include_once "partes/parte_menu.php" ?>

<hr class="bg-light">

<div class="container"

<div class="row">

    <div class="col-md-5">
        <form action="direccion.php" method="get">

            <div class="mb-3">
                <label for="direccion">Direccion</label>
                <input type="text" name="direccion" id="direccion" class="form-control">
            </div>

            <div class="mb-3">
                <label for="direccion2">Direccion2</label>
                <input type="text" name="direccion2" id="direccion2" class="form-control">
            </div>

            <div class="mb-3">
                <label for="distrito">Distrito</label>
                <input type="text" name="distrito" id="distrito" class="form-control">
            </div>

            <div class="mb-3">
                <label for="ciudad">Ciudad</label>
                <select name="ciudad" id="ciudad" class="form-select">
                    <option value="">Elige una ciudad</option>
                    <?php

                    foreach ($ciudades as $ciudad) {

                        echo "<option value=\"{$ciudad[city_id]}}\">{$ciudad["city"]}</option>";

                    }

                    ?>


                </select>
            </div>

            <div class="mb-3">
                <label for="codigoPostal">Codigo postal</label>
                <input type="text" name="codigoPostal" id="codigoPostal" class="form-control">
            </div>

            <div class="mb-3">
                <label for="telefono">telefono</label>
                <input type="tel" name="telefono" id="telefono" class="form-control">
            </div>

            <div class="mb-3">
                <label for="ubicacion">Ubicacion</label>
                <input type="text" name="ubicacion" id="ubicacion" class="form-control">
            </div>

            <button type="submit" name="guardarDireccion" class="btn btn-primary">Guardar datos</button>


        </form>


    </div>
</div>

