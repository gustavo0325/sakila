
<?php include_once "partes/parte_head.php"?>

<?php include_once "partes/parte_menu.php"?>

<hr class="bg-light">

<div class="container"
     <div class="row">
     <div class="col-md-5">
         <form action="actor.php" method="get">
             <div class="mb-3">
                 <label for="nombreActor">primer nombre del actor</label>
                 <input type="text" name="nombreActor" id="nombreActor" class="form-control">
             </div>

             <div class="mb-3">
                 <label for="apellidoActor">Apellido del actor</label>
                 <input type="text" name="apellidoActor"id="apellidoActor" class="form-control">
             </div>

             <button type="submit" name="guardar_actor" class="btn btn-primary">Guardar datos</button>

         </form>
         <hr>
         <?php
         echo $actor;
         echo $apellidoActor;
         ?>
     </div>
     </div>
</div>

</body>
</html>
