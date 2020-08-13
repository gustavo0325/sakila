<?php include_once "partes/parte_head.php" ?>

<?php include_once "partes/parte_menu.php" ?>
<h1 class="text-light"> <?php echo $nombrepagina; ?> </h1>

<hr class="bg-light">

<div class="container">

    <div class="row">

        <div class="col-md-5">
            <form action="cliente.php" method="post">

                <label class="mt-3" for="tienda">Tienda:</label>
                <select class="form-select" name="tienda" id="tienda">
                    <option value="">selecciona una tienda</option>

                    <?php

                    foreach ($tiendas as $tienda) {

                        echo "<option value=\"{$tienda[store_id]}\">{$tienda["store_id"]}</option>";

                    }

                    ?>


                </select>


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

                            echo "<option value=\"{$direccion[address_id]}\">{$direccion['address']}</option>";

                        }

                        ?>

                    </select>

                    <div class="mb-3">
                        <label for="activo">activo</label>

                        <input type="checkbox" name="activo" id="activo">

                    </div>
                </div>

                <button type="submit" name="guardarInformacion" class="btn btn-primary">Guardar informacion</button>

            </form>

            <?php
            include_once "partes/partes_mensaje.php";
            ?>

        </div>
    </div>

    <hr class="bg-light">

    <?php if (empty($clientes)) { ?>
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
                    <th scope="col">ID_cliente</th>
                    <th scope="col">ID_tienda</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Email</th>
                    <th scope="col">ID_direccion</th>
                    <th scope="col">activo</th>

                    </thead>

                    <tbody>

                    <?php
                    foreach ($clientes as $cliente) {


                        echo "<tr>
                <th scope=\"row\">{$cliente['customer_id']}</th>
                 <td>{$cliente['store_id']}</td>
                <td>{$cliente['first_name']}</td>
                <td>{$cliente['last_name']}</td>
                 <td>{$cliente['email']}</td>
                  <td>{$cliente['address_id']}</td>
                   <td>{$cliente['active']}</td>
                   
            </tr>";
                    }

                    ?>

                    </tbody>

                </table>
            </div>
        </div>
        <?php }?>
    </div>





