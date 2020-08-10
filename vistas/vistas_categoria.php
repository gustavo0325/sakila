<?php include_once "partes/parte_head.php" ?>

<?php include_once "partes/parte_menu.php" ?>

<h1 class="text-light"> <?php echo $nombrepagina; ?> </h1>


<hr class="bg-light">

<div class="container">

    <div class="row">

        <div class="col-md-5">
            <form action="categoria.php" method="post">

                <input type="hidden" name="idCategoria" value="<?= $idCategoria ?>">

                <div class="mb-3">
                    <label for="categoria">categoria</label>
                    <input type="text" name="categoria" id="categoria" class="form-control" value="<?= $categoria ?>">

                </div>

                <button type=" submit" name="guardarCategoria" class="btn btn-primary">Guardar Categoria</button>

            </form>


            <?php
            include_once "partes/partes_mensaje.php";
            ?>

        </div>
    </div>
</div>


</div>

<hr class="bg-light">

<div class="row container">
    <div class="col-md-5">
        <form action="categoria.php" method="post">

            <table class="table table-hover table-dark table-striped">

                <thead>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Aciiones</th>
                </thead>

                <tbody>

                <?php
                foreach ($categorias as $categoria) {


                    echo "<tr>
                <th scope=\"row\">{$categoria['category_id']}</th>
                <td>{$categoria['name']}</td>
                 <td>
                 <button class='btn-outline-danger btn-sm' title='Eliminar Categoria' name='eliminarCategoria'value='{$categoria['category_id']}'><i class='fas fa-trash'></i></button>
                 <button class='btn btn-outline-info btn-sm' title='Editar Catgoria' name='editarCategoria' value='{$categoria['category_id']}'><i class='fas fa-pen'></i></button>
                 </td>
               
            </tr>";
                }

                ?>

                </tbody>

            </table>

        </form>
    </div>
</div>


