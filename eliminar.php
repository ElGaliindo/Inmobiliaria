<?php

	require 'conex.php';

	$id = $_GET['id'];

	$sql = "DELETE FROM formulario WHERE id = '$id'";
	$resultado = $conexion->query($sql);

  if ($conexion->query($sql)) {
    $conexion->close();
    echo "<script>
            alert('Registro Eliminado');
                    window.location='publicar.html?'
                  </script>";
  }else{
    echo "Error" . $insetSQl . "<br>" .$conexion->close();;
  }

?>
