<?php
	require 'conex.php';

	$id = $_GET['id'];

	$sql = "SELECT * FROM formulario WHERE id = '$id'";
	$resultado = $conexion->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);

?>
<html lang="es">
	<head>

		<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/modal.css">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>

	<body>
		<div class="prin">

				<h3><img src="img/escritura.png"> MODIFICAR REGISTRO</h3>

			<form  method="POST" action="ope_modificar.php" autocomplete="off">
				<div class="mb-3">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
						<input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre" value="<?php echo $row['Nombre']; ?>" required>
				</div>

				<input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />

				<div class="mb-3">
					<label for="email" class="col-sm-2 control-label">Email</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $row['email']; ?>"  required>
				</div>

				<div class="mb-3">
					<label for="telefono" class="col-sm-2 control-label">Telefono</label>
						<input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Telefono" value="<?php echo $row['telefono']; ?>" >
				</div>

        <div class="mb-3">
					<label for="email" class="col-sm-2 control-label">Direccion</label>
						<input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" value="<?php echo $row['direccion']; ?>"  required>
				</div>
        <br>
				<div class="form-group bot">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="principal.php" class="btn btn-secondary">Regresar</a>
						<button type="submit" class="btn btn-success">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>
