<?php include_once "partes/parte_head.php" ?>

<?php include_once "partes/parte_menu.php" ?>


<hr class="bg-light">

<div class="container">

    <div class="row">

        <div class="col-md-5">
            <div action="cliente.php" method="get">

                <label class="mt-3" for="tienda">Tienda:</label>
                <select class="form-select" name="tienda" id="tienda">
                    <option value="">selecciona una tienda</option>

                    <?php

                    foreach ($tiendas as $tienda) {

                        echo "<option value=\"{$tienda[store_id]}}\">{$tienda["store_id"]}</option>";

                    }

                    ?>


                </select>
            </div>

            <div class="mb-3">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control">
            </div>

            <div class="mb-3">
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" id="apellido" class="form-control">
            </div>

            <div class="mb-3">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control">
            </div>

            <div class="mb-3">
                <label for="direccion">Direccion</label>

                <select name="direccion" id="direccion" class="form-select">
                    <option value="">Selecciona una direccion</option>


                    <?php

                    foreach ($direcciones as $direccion) {

                        echo "<option value=\"{$direccion[address_id]}}\">{$direccion['address']}</option>";

                    }

                    ?>

                </select>

                <div class="mb-3">
                    <label for="activo">activo</label>

                    <input type="checkbox" name="activo" id="activo">

                </div>
            </div>

            <button type="submit" name="guardarInformacion" class="btn btn-primary">Guardar informacion</button>


        </div>
    </div>
</div>






