<?php include_once "partes/parte_head.php" ?>

<?php include_once "partes/parte_menu.php" ?>

<hr class="bg-light">

<div class="container">

    <div class="row">

        <div class="col-md-5">
            <form action="idioma.php" method="get">

                <div class="mb-3">
                    <label for="idioma">Idioma</label>
                    <input type="text" name="idioma" id="idioma" class="form-control">

                </div>

            </form>

        </div>
    </div>
    <button type="submit" name="guardarIdioma" class="btn btn-primary">guardar idioma</button>

</div>





<hr class="bg-light">

<div class="row container">
    <div class="col-md-5">

        <table class="table table-hover table-dark table-striped">

            <thead>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>

            </thead>

            <tbody>

            <?php
            foreach ($idiomas as $idioma) {


                echo "<tr>
                <th scope=\"row\">{$idioma['language_id']}</th>
                <td>{$idioma['name']}</td>
               
            </tr>";
            }

            ?>

            </tbody>

        </table>
    </div>
</div>
