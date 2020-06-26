<?php include_once "partes/parte_head.php"?>

<?php include_once "partes/parte_menu.php"?>


<hr class="bg-light">

<div class="container">

<div class="row">

    <div class="col-md-5">
        <form action="cliente.php" method="get">

            <div class="mb-3">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control">
            </div>

            <div class="mb-3">
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" id="apellido" class="form-control">
            </div>

            <div class="mb-3">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control">
            </div>

            <button type="submit" name="guardarInformacion" class="btn btn-primary">Guardar informacion</button>


        </form>
    </div>
</div>
</div>



</body>
</html>
