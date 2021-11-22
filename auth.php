<?php

if (isset($_POST['Resgistarse'])) {

$conexion = new mysqli("localhost", "Root", "admin", "inmobiliaria");
if ($conexion->connect_error) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}
    $nombre = $_POST['nombre'];
    $Email = $_POST['Email'];
    $contraseña = $_POST['contraseña'];

    $sql = " INSERT INTO login SET nombre = '$nombre', Email = '$Email', contraseña = '$contraseña' ";

    if ($conexion->query($sql)) {
      $conexion->close();
      echo "<script>
              alert('Registro exitoso, Inicia sesión');
                      window.location='login.html?'
                    </script>";
    }else{
      echo "Error" . $sql . "<br>" .$conexion->close();;
    }
  }

 ?>
