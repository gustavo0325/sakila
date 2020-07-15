<?php include_once "partes/parte_head.php" ?>

<?php include_once "partes/parte_menu.php" ?>

<h1 class="text-light"> <?php echo $nombrepagina; ?> </h1>

<hr class="bg-light">

<div class="container">
    <div class="row">
        <div class="col-md-5">
            <form action="actor.php" method="post">
                <div class="mb-3">
                    <label for="nombreActor">primer nombre del actor</label>
                    <input type="text" name="nombreActor" id="nombreActor" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="apellidoActor">Apellido del actor</label>
                    <input type="text" name="apellidoActor" id="apellidoActor" class="form-control">
                </div>

                <button type="submit" name="guardar_actor" class="btn btn-primary">Guardar datos</button>

            </form>


        </div>
    </div>
</div>

<hr class="bg-light">
<div class="container">
    <div class="row">
        <div class="col-md-9">

            <table class="table table-hover table-dark table-striped">

                <thead>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                </thead>

                <tbody>

                <?php
                foreach ($actores as $actor) {


                    echo "<tr>
                <th scope=\"row\">{$actor['actor_id']}</th>
                <td>{$actor['first_name']}</td>
                <td>{$actor['last_name']}</td>
            </tr>";
                }

                ?>

                </tbody>

            </table>
        </div>
    </div>
</div>




