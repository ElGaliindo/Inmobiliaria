<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title></title>
  </head>
  <body>

<div class="tabla">

  <style media="screen">
  .tabla{
    width: 80%;
    margin: 120px;
  }
  </style>

    <table class="table table-dark table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">Email</th>
          <th scope="col">Telefono</th>
          <th scope="col">Direccion</th>
          <th scope="col">Eliminar</th>
          <th scope="col">modificar</th>
        </tr>
      </thead>

    <?php

    $conexion = new mysqli("localhost", "Root", "admin", "inmobiliaria");
    if ($conexion->connect_error) {
        echo "Fallo al conectar a MySQL: (" . $conexion->connect_error . ") " . $conexion->connect_error;
    }

    $qry = "SELECT * FROM formulario";
    $result = $conexion->query($qry);
    while($row=$result->fetch_assoc()){

     ?>

  <tbody>
    <tr>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['Nombre']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['telefono']; ?></td>
      <td><?php echo $row['direccion']; ?></td>
      <td><a href="modificar.php?id=<?php echo $row['id']; ?>">Modificar</a></td>
      <td><a href="eliminar.php?id=<?php echo $row['id']; ?>">Eliminar</a></td>
    </tr>
  </tbody>
</table>

<?php
}
 ?>
</div>
  </body>
</html>
