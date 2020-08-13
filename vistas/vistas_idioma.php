<?php include_once "partes/parte_head.php" ?>

<?php include_once "partes/parte_menu.php" ?>
<h1 class="text-light"> <?php echo $nombrepagina; ?> </h1>

<hr class="bg-light">



<div class="container">

    <div class="row">

        <div class="col-md-5">
            <form action="idioma.php" method="post">

                <input type="hidden" name="idIdioma" value="<?= $idIdioma ?>">

                <div class="mb-3">
                    <label for="idioma">Idioma</label>
                    <input type="text" name="idioma" id="idioma" class="form-control" value="<?= $nombreIdioma ?>">

                </div>

                <button type="submit" name="guardarIdioma" class="btn btn-primary">guardar idioma</button>

            </form>

            <?php
            include_once "partes/partes_mensaje.php";

            ?>
        </div>
    </div>


</div>


<hr class="bg-light">


<?php if (empty($idiomas)) { ?>
    <div class="alert alert-info" role="alert">
        <img src="static/img/empty.svg" alt="imagen vacia" width="100px">
        No hay datos registrados..
    </div>
<?php } else{ ?>

<div class="container">

<div class="row">
    <div class="col-md-5">
        <form action="idioma.php" method="post">

        <table class="table table-hover table-dark table-striped">

            <thead>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">acciones</th>

            </thead>

            <tbody>

            <?php
            foreach ($idiomas as $idioma) {


                echo "<tr>
                <th scope=\"row\">{$idioma['language_id']}</th>
                <td>{$idioma['name']}</td>
                 <td>
                  <button class='btn-outline-danger btn-sm' title='Eliminar Idioma' name='eliminarIdioma'value='{$idioma['language_id']}'><i class='fas fa-trash'></i></button>
                  <button class='btn btn-outline-info btn-sm' title='Editar Idioma' name='editarIdioma' value='{$idioma['language_id']}'><i class='fas fa-pen'></i></button>
                 </td>
               
            </tr>";
            }

            ?>

            </tbody>

        </table>

        </form>
    </div>
</div>
    <?php }?>
</div>