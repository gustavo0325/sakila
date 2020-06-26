
<?php include_once "partes/parte_head.php"?>

<?php include_once "partes/parte_menu.php"?>


<hr class="bg-light">

<div class="container">

    <div class="row">

        <div class="col-md-5">
            <form action="pais.php" method="get">

                <div class="mb-3">
                    <label for="pais">Pais</label>
                    <input type="text" name="pais" id="pais" class="form-control">

                </div>

                <button type="submit" name="guardarPais" class="btn btn-primary">Guardar pais</button>

            </form>
        </div>
    </div>

</div>


</body>
</html>