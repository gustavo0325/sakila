<?php include_once "partes/parte_head.php" ?>

<?php include_once "partes/parte_menu.php" ?>


<hr class="bg-light">

<div class="container">

    <div class="row">

        <div class="col-md-5">

            <form action="pais.php" method="post">

                <div class="mb-3">
                    <label for="pais">Pais</label>
                    <input type="text" name="pais" id="pais" class="form-control">

                </div>

                <button type="submit" name="guardarPais" class="btn btn-primary">Guardar pais</button>

            </form>

        </div>

    </div>

</div>


<hr class="bg-light">

<div class="row container">
    <div class="col-md-5">

        <table class="table table-hover table-dark table-striped">

            <thead>
            <th scope="col">ID</th>
            <th scope="col">Pais</th>

            </thead>

            <tbody>

            <?php
            foreach ($paises as $pais) {


                echo "<tr>
                <th scope=\"row\">{$pais['country_id']}</th>
                <td>{$pais['country']}</td>
               
            </tr>";
            }

            ?>

            </tbody>

        </table>
    </div>
</div>
