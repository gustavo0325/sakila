
<?php include_once "partes/parte_head.php"?>

<?php include_once "partes/parte_menu.php"?>



<hr class="bg-light">

<div class="container">

    <div class="row">

        <div class="col-md-5">
            <form action="tienda.php" method="get">

                <div class="mb-3">
                    <label for="manager">Manager</label>

                    <select name="manager" id="manager" class="form-select">
                        <option value="">Aqui va el listado de los manager, desde sql</option>
                    </select>


                <div class="mb-3">
                    <label for="direccion1">Direccion</label>

                    <select name="direccion1" id="direccion1" class="form-select">
                        <option value="">Aqui va el listado de la ciudad, desde sql</option>
                    </select>

                </div>


                <button type="submit" name="guardarTienda" class="btn btn-primary">Guardar datos tienda</button>

            </form>
        </div>
    </div>

</div>

