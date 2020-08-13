<?php include_once "partes/parte_head.php" ?>

<?php include_once "partes/parte_menu.php" ?>
<h1 class="text-light"> <?php echo $nombrepagina; ?> </h1>


<hr class="bg-light">

<div class="container">

    <div class="row">

        <div class="col-md-5">

            <form action="personal.php" method="post">

                <label class="mt-3" for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control">

                <label class="mt-3" for="apellido">Apellido:</label>
                <input type="text" name="apellido" id="apellido" class="form-control">

                <label class="mt-3" for="direccion">Dirección:</label>
                <select type="text" name="direccion" id="direccion" class="form-select">
                    <option value=""> seleciona la direccion</option>

                    <?php

                    foreach ($direcciones as $direccion) {

                        echo "<option value=\"{$direccion[address_id]}\">{$direccion['address']}</option>";

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

                        echo "<option value=\"{$tienda[store_id]}\">{$tienda["store_id"]}</option>";

                    }

                    ?>


                </select>

                <label for="activo">activo:</label>
                <input type="checkbox" name="activo" id="activo">


                <label class="mt-3" for="nombreUsuario">Nombre de Usuario:</label>
                <input type="text" name="nombreUsuario" id="nombreUsuario" class="form-control">


                <label class="mt-3" for="contrasena">Contraseña:</label>
                <input type="password" name="contrasena" id="contrasena" class="form-control">


                <button type="submit" name="btnGuardarPersonal" class="btn btn-primary mt-3">Guardar Datos</button>


            </form>


            <?php
            include_once "partes/partes_mensaje.php";
            ?>


            <br>
        </div>
    </div>


    <hr class="bg-light">

    <?php if (empty($personales)) { ?>
        <div class="alert alert-info" role="alert">
            <img src="static/img/empty.svg" alt="imagen vacia" width="100px">
            No hay datos registrados..
        </div>
    <?php } else{ ?>
    <div class="container">
        <div class="row">
            <div class="col-md-9">

                <table class="table table-hover table-dark table-striped">

                    <thead>
                    <th scope="col">ID_tienda</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">ID_address</th>
                    <th scope="col">Email</th>
                    <th scope="col">store_id</th>
                    <th scope="col">Activo</th>
                    <th scope="col">username</th>
                    <th scope="col">contraseña</th>
                    </thead>

                    <tbody>

                    <?php
                    foreach ($personales as $personal) {


                        echo "<tr>
                <th scope=\"row\">{$personal['staff_id']}</th>
                <td>{$personal['first_name']}</td>
                <td>{$personal['last_name']}</td>
                <td>{$personal['address_id']}</td>
                <td>{$personal['email']}</td>
                <td>{$personal['store_id']}</td>
                <td>{$personal['active']}</td>
                <td>{$personal['username']}</td>
                <td>{$personal['password']}</td>
            </tr>";
                    }

                    ?>

                    </tbody>

                </table>
            </div>
        </div>
        <?php   } ?>
    </div>