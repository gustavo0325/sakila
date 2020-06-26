<?php include_once "partes/parte_head.php" ?>

<?php include_once "partes/parte_menu.php" ?>

<hr class="bg-light">

<div class="container">

    <div class="row">

        <div class="col-md-5">
            <form action="idioma.php" method="get">


                <div class="mb-3">
                    <label for="idioma">Idioma</label>
                    <select name="idioma" id="idioma" class="form-select">
                        <option value="">Aqui va el listado de los manager, desde sql</option>

                </div>

                <button type="submit" name="guardarIdioma" class="btn btn-primary">Guardar datos tienda</button>

            </form>

        </div>


    </div>
</div>

