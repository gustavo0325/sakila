<?php include_once "partes/parte_head.php" ?>

<?php include_once "partes/parte_menu.php" ?>


<hr class="bg-light">

<div class="container">

    <div class="row">

        <div class="col-md-5">
            <form action="categoria.php" method="get">

                <div class="mb-3">
                    <label for="categoria">categoria</label>

                    <input type="text" name="categoria" id="categoria" class="form-control">


                </div>

                <button type="submit" name="guardarCategoria" class="btn btn-primary">Guardar Categoria</button>

            </form>


        </div>
    </div>
</div>


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
            foreach ($categorias as $categoria) {


                echo "<tr>
                <th scope=\"row\">{$categoria['category_id']}</th>
                <td>{$categoria['name']}</td>
               
            </tr>";
            }

            ?>

            </tbody>

        </table>
    </div>
</div>


