<?php include_once "partes/parte_head.php" ?>

<?php include_once "partes/parte_menu.php" ?>
<h1 class="text-light"> <?php echo $nombrepagina; ?> </h1>

<hr class="bg-light">

<div class="container">

    <div class="row">

        <div class="col-md-5">

            <form action="pais.php" method="post">

                <input type="hidden" name="idPais" value="<?= $idPais ?>">

                <div class="mb-3">
                    <label for="pais">Pais</label>
                    <input type="text" name="pais" id="pais" class= "form-control" value= "<?= $pais ?>">

                </div>

                <button type="submit" name="guardarPais" class="btn btn-primary">Guardar pais</button>

            </form>

            <?php
            include_once "partes/partes_mensaje.php";
            ?>

        </div>
    </div>

</div>


<hr class="bg-light">

<div class="row container">
    <div class="col-md-5">

        <table class="table table-hover table-dark table-striped">
            <form action="pais.php" method="post">

            <thead>
            <th scope="col">ID</th>
            <th scope="col">Pais</th>
            <th scope="col">Acciones</th>
            </thead>

            <tbody>

            <?php
            foreach ($paises as $pais) {


                echo "<tr>
                <th scope=\"row\">{$pais['country_id']}</th>
                <td>{$pais['country']}</td>
                  <td>
                  <button class='btn-outline-danger btn-sm' title='Eliminar Pais' name='eliminarPais'value='{$pais['country_id']}'><i class='fas fa-trash'></i></button>
                  <button class='btn btn-outline-info btn-sm' title='Editar Pais' name='editarPais' value='{$pais['country_id']}'><i class='fas fa-pen'></i></button>
                 </td>
               
            </tr>";
            }

            ?>

            </tbody>

        </table>
        </form>
    </div>
</div>
