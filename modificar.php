<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

    $conexion = new mysqli("localhost", "Root", "admin", "inmobiliaria");
    if ($conexion->connect_error) {
        echo "Fallo al conectar a MySQL: (" . $conexion->connect_error . ") " . $conexion->connect_error;
    }

    $id = $_REQUEST['id'];

    $query="SELECT * FROM formulario WHERE id = '$id'";
    $result = conexion->query($query);
    $row = $result->fetch_assoc();

     ?>

    <form action="ope_modificar.php?id=<?php echo $row['id']; ?>" method="post">

      <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre" required value="<?php echo $row['nombre']; ?>">
      </div>

      <div class="mb-3">
        <label for="" class="form-label">Direccion</label>
        <input type="text" class="form-control" name="direccion" required value="<?php echo $row['direccion']; ?>">
      </div>

      <div class="mb-3">
        <input type="submit" class="form-control" name="aceptar" required value="Aceptar">
      </div>

    </form>

  </body>
</html>
