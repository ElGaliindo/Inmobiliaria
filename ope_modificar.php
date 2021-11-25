<?php

$conexion = new mysqli("localhost", "Root", "admin", "inmobiliaria");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}

	$id = $_POST['id'];
	$Nombre = $_POST['Nombre'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];
	$direccion = $_POST['direccion'];


	$sql = "UPDATE formulario SET Nombre='$Nombre', email='$email', telefono='$telefono', direccion='$direccion' WHERE id = '$id'";
	$resultado = $conexion->query($sql);

  if ($conexion->query($sql)) {
    $conexion->close();
    echo "<script>
            alert('Se genero el cambio exitosamente');
                    window.location='principal.php?'
                  </script>";
  }else{
    echo "Error" . $insetSQl . "<br>" .$conexion->close();;
  }

?>
