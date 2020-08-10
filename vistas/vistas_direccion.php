<?php include_once "partes/parte_head.php" ?>

<?php include_once "partes/parte_menu.php" ?>
<h1 class="text-light"> <?php echo $nombrepagina; ?> </h1>

<hr class="bg-light">

<div class="container"

<div class="row">

    <div class="col-md-5">
        <form action="direccion.php" method="post">

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

                        echo "<option value=\"{$ciudad[city_id]}\">{$ciudad["city"]}</option>";

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



            <button type="submit" name="guardarDireccion" class="btn btn-primary">Guardar datos</button>


        </form>


        <?php
        include_once "partes/partes_mensaje.php";
        ?>


    </div>
</div>

<hr class="bg-light">

<div class="row container">
    <div class="col-lg-12">

        <table class="table table-hover table-dark table-striped">

            <thead>
            <th scope="col">ID_direccion</th>
            <th scope="col">Direccion</th>
            <th scope="col">Direccion2</th>
            <th scope="col">Distrito</th>
            <th scope="col">ID_ciudad</th>
            <th scope="col">codigo_postal</th>
            <th scope="col">telefono</th>
            <th scope="col">fecha</th>
            </thead>

            <tbody>

            <?php
            foreach ($direcciones as $direcion) {


                echo "<tr>
                <th scope=\"row\">{$direcion['address_id']}</th>
                <td>{$direcion['address']}</td>
                <td>{$direcion['address2']}</td>
                 <td>{$direcion['district']}</td>
                  <td>{$direcion['city_id']}</td>
                    <td>{$direcion['postal_code']}</td>
                      <td>{$direcion['phone']}</td>
                        <td>{$direcion['last_update']}</td>
            </tr>";
            }

            ?>

            </tbody>

        </table>
    </div>
</div>
