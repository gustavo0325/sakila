<?php include_once "partes/parte_head.php" ?>

<?php include_once "partes/parte_menu.php" ?>
<h1 class="text-light"> <?php echo $nombrepagina; ?> </h1>


<hr class="bg-light">

<div class="container">

    <div class="row">

        <div class="col-md-5">
            <form action="tienda.php" method="post">

                <div class="mb-3">
                    <label for="manager">Manager</label>

                    <select name="manager" id="manager" class="form-select">
                        <option value="">Aqui va el listado de los manager, desde sql</option>

                        <?php

                        foreach ($informaciontiendas as $infotienda) {

                            echo "<option value=\"{$infotienda[manager_staff_id]}}\">{$infotienda["first_name"]}</option>";

                        }

                        ?>


                    </select>


                    <div class="mb-3">
                        <label for="direccion1">Direccion</label>

                        <select name="direccion1" id="direccion1" class="form-select">
                            <option value="">Aqui va el listado de la ciudad, desde sql</option>

                            <?php

                            foreach ($direcciones as $direccion) {

                                echo "<option value=\"{$direccion[address_id]}}\">{$direccion["address"]}</option>";

                            }

                            ?>


                        </select>

                    </div>


                    <button type="submit" name="guardarTienda" class="btn btn-primary">Guardar datos tienda</button>

            </form>
        </div>
    </div>


    <hr class="bg-light">

    <div class="row container">
        <div class="col-md-9">

            <table class="table table-hover table-dark table-striped">

                <thead>
                <th scope="col">ID de la tienda</th>
                <th scope="col">Gerente de la tienda</th>
                <th scope="col">Direccion de la tienda</th>
                </thead>

                <tbody>

                <?php
                foreach ($informaciontiendas as $infotienda) {


                    echo "<tr>
                <th scope=\"row\">{$infotienda['store_id']}</th>
                <td>{$infotienda['first_name']}</td>
                <td>{$infotienda['address']}</td>
            </tr>";
                }

                ?>

                </tbody>

            </table>
        </div>
    </div>



