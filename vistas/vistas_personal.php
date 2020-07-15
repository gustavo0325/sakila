<?php include_once "partes/parte_head.php" ?>

<?php include_once "partes/parte_menu.php" ?>


<hr class="bg-light">

<div class="container">

    <div class="row">

        <div class="col-md-5">

            <div action="personal.php" method="get">

                <label class="mt-3" for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control">

                <label class="mt-3" for="apellido">Apellido:</label>
                <input type="text" name="apellido" id="apellido" class="form-control">

                <label class="mt-3" for="direccion">Dirección:</label>
                <select type="text" name="direccion" id="direccion" class="form-select">
                    <option value=""> seleciona la direccion</option>

                    <?php

                    foreach ($direcciones as $direccion) {

                        echo "<option value=\"{$direccion[address_id]}}\">{$direccion['address']}</option>";

                    }

                    ?>


                </select>
                <div class="form-file mt-3">
                    <input type="file" class="form-file-input" id="foto" name="foto">
                    <label class="form-file-label" for="foto">
                        <span class="form-file-text mr-2">Selecciona una foto ...</span>
                        <span class="form-file-button btn btn-primary ">Buscar</span>
                    </label>
                </div>

                <label class="mt-3" for="correo">Correo:</label>
                <input type="email" name="correo" id="correo" class="form-control">

                <label class="mt-3" for="tienda">Tienda:</label>
                <select class="form-select" name="tienda" id="tienda">
                    <option value="">selecciona una tienda</option>

                    <?php

                    foreach ($tiendas as $tienda) {

                        echo "<option value=\"{$tienda[store_id]}}\">{$tienda["store_id"]}</option>";

                    }

                    ?>


                </select>

                <div class="mt-4"
                <label for="activo">activo</label>
                <input type="checkbox" name="activo" id="activo">
            </div>

            <label class="mt-3" for="nombreUsuario">Nombre de Usuario:</label>
            <input type="text" name="nombreUsuario" id="nombreUsuario" class="form-control">


            <label class="mt-3" for="contraseña">Contraseña:</label>
            <input type="password" name="contraseña" id="contraseña" class="form-control">


            <button type="submit" name="btnGuardarPersonal" class="btn btn-primary mt-3">Guardar Datos</button>


            <br>
        </div>
    </div>


