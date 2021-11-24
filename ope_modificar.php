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

?>

<html lang="es">
	<head>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>

	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>REGISTRO MODIFICADO</h3>
						<?php } else { ?>
						<h3>ERROR AL MODIFICAR</h3>
					<?php } ?>

					<a href="principal.php" class="btn btn-primary">Regresar</a>

				</div>
			</div>
		</div>
	</body>
</html>
