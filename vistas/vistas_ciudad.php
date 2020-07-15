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
                        <option value="">Selecciona un pais</option>

                        <?php

                        foreach ($paises as $pais){

                            echo "<option value=\"{$pais[country_id]}}\">{$pais["country"]}</option>";

                        }

                        ?>



                    </select>


                </div>


                <button type="submit" name="guardarCiudad" class="btn btn-primary">Guardar Ciudad</button>

            </form>
        </div>
    </div>

</div>

<hr class="bg-light">

<div class="row container">
    <div class="col-md-9">

        <table class="table table-hover table-dark table-striped">

            <thead>
            <th scope="col">ID de la ciudad</th>
            <th scope="col">Nombre de la ciudad</th>
            <th scope="col">Nombre del pais</th>
            </thead>

            <tbody>

            <?php
            foreach ($ciudades as $ciudad){


                echo"<tr>
                <th scope=\"row\">{$ciudad['city_id']}</th>
                <td>{$ciudad['city']}</td>
                <td>{$ciudad['country']}</td>
            </tr>" ;
            }

            ?>

            </tbody>

        </table>
    </div>
</div>



