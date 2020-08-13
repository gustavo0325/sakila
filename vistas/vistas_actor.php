<?php include_once "partes/parte_head.php" ?>

<?php include_once "partes/parte_menu.php" ?>

<h1 class="text-light"> <?php echo $nombrepagina; ?> </h1>

<hr class="bg-light">

<div class="container">
    <div class="row">
        <div class="col-md-5">
            <form action="actor.php" method="post">

                <input type="hidden" name="idActor" value="<?= $idActor ?>">

                <div class="mb-3">
                    <label for="nombreActor">primer nombre del actor</label>
                    <input type="text" name="nombreActor" id="nombreActor" class="form-control"
                           value="<?= $nombreActor ?>">
                </div>

                <div class="mb-3">
                    <label for="apellidoActor">Apellido del actor</label>
                    <input type="text" name="apellidoActor" id="apellidoActor" class="form-control"
                           value="<?= $apellidoActor ?>">
                </div>


                <button type="submit" name="guardar_Actor" class="btn btn-primary">Guardar datos</button>


            </form>

            <?php
            include_once "partes/partes_mensaje.php";
            ?>


        </div>

    </div>

<hr class="bg-light">

    <?php if(empty($actores)) { ?>
    <div class="alert alert-info" role="alert">
        <img src="static/img/empty.svg" alt="imagen vacia" width="100px">
        No hay datos registrados..
    </div>
    <?php } else{ ?>

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <form action="actor.php" method="post">

                <table class="table table-hover table-dark table-striped">

                    <thead>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th>Acciones</th>
                    </thead>

                    <tbody>

                    <?php
                    foreach ($actores as $actor) {


                        echo "<tr>
                <th scope=\"row\">{$actor['actor_id']}</th>
                <td>{$actor['first_name']}</td>
                <td>{$actor['last_name']}</td>
                 <td>
                 <button class='btn-outline-danger btn-sm' title='Eliminar actor' name='eliminarActor'value='{$actor['actor_id']}'><i class='fas fa-trash'></i></button>
                 <button class='btn btn-outline-info btn-sm' title='Editar Actor' name='editarActor' value='{$actor['actor_id']}'><i class='fas fa-pen'></i></button>
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




