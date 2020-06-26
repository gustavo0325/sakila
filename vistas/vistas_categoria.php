

<?php include_once "partes/parte_head.php"?>

<?php include_once "partes/parte_menu.php"?>



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

</body>
</html>
