<?php include_once "partes/parte_head.php" ?>

<?php include_once "partes/parte_menu.php" ?>


<hr class="bg-light">

<div class="container">

    <div class="row">

        <div class="col-md-5">
            <form action="ciudad.php" method="get">


                <div class="mb-3">
                    <label for="ciudad">Ciudad</label>
                    <input type="text" name="ciudad" id="ciudad" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="pais">Pais</label>

                    <select name="pais" id="pais" class="form-select">
                        <option value="">Aqui va el listado de la ciudad, desde sql</option>
                    </select>


                </div>


                <button type="submit" name="guardarCiudad" class="btn btn-primary">Guardar Ciudad</button>

            </form>
        </div>
    </div>

</div>


</body>
</html>
