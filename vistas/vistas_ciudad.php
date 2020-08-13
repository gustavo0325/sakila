<?php include_once "partes/parte_head.php" ?>

<?php include_once "partes/parte_menu.php" ?>

<h1 class="text-light"> <?php echo $nombrepagina; ?> </h1>


<hr class="bg-light">

<div class="container">

    <div class="row">

        <div class="col-md-5">
            <form action="ciudad.php" method="post">

                <input type="hidden" name="idCity" value="<?= $idCity ?>">

                <div class="mb-3">


                    <label for="ciudad">Ciudad</label>
                    <input type="text" name="ciudad" id="ciudad" class="form-control" value="<?= $nombreCiudad ?>" >
                </div>

                <div class="mb-3">
                    <label for="pais">Pais</label>


                    <select name="pais" id="pais" class="form-select"value="<?= $idPais ?>">
                        <option value="">Selecciona un pais</option>


                        <?php

                        foreach ($paises as $pais) {

                            echo "<option value=\"{$pais[country_id]}\">{$pais["country"]}</option>";

                        }

                        ?>


                    </select>


                </div>


                <button type="submit" name="guardarCiudad" class="btn btn-primary">Guardar Ciudad</button>

            </form>

            <?php

            include_once "partes/partes_mensaje.php";

            ?>


        </div>
    </div>
</div>

</div>

<hr class="bg-light">

<?php if (empty($ciudades)) { ?>
    <div class="alert alert-info" role="alert">
        <img src="static/img/empty.svg" alt="imagen vacia" width="100px">
        No hay datos registrados..
    </div>
<?php } else{ ?>
<div class="container">
<div class="row">
    <div class="col-md-9">
        <form action="ciudad.php" method="post">

            <table class="table table-hover table-dark table-striped">

                <thead>
                <th scope="col">ID de la ciudad</th>
                <th scope="col">Nombre de la ciudad</th>
                <th scope="col">Nombre del pais</th>
                <th scope="col">Acciones</th>
                </thead>

                <tbody>

                <?php
                foreach ($ciudades as $ciudad) {


                    echo "<tr>
                <th scope=\"row\">{$ciudad['city_id']}</th>
                <td>{$ciudad['city']}</td>
                <td>{$ciudad['country']}</td>
                <td>
                  <button class='btn-outline-danger btn-sm' title='Eliminar Ciudad' name='eliminarCiudad'value='{$ciudad['city_id']}'><i class='fas fa-trash'></i></button>
                 <button class='btn btn-outline-info btn-sm' title='Editar Ciudad' name='editarCiudad' value='{$ciudad['city_id']}'><i class='fas fa-pen'></i></button>
                 </td>
            </tr>";
                }

                ?>

                </tbody>

            </table>

        </form>
    </div>
</div>

    <?php  }?>
</div>



