<?php
	require 'conex.php';

	$where = "";

	if(!empty($_POST))
	{
		$valor = $_POST['campo'];
		if(!empty($valor)){
			$where = "WHERE Nombre LIKE '%$valor'";
		}
	}
	$sql = "SELECT * FROM formulario $where";
	$resultado = $conexion->query($sql);

?>
<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<link rel="stylesheet" href="css/modal.css">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>

	<body>

		<div class="volver">
			<a href="index2.php"><img src="img/volver.png"></a>
		</div>

		<div class="container">

			<div class="row">

				<form action="<?php $_SERVER['PHP_SELF']; ?>" class="d-flex" method="POST">
					<input type="text" class="form-control me-2" id="campo" name="campo" placeholder="Solo el nombre" />
					<input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-dark" />
				</form>
			</div>

			<div class="row table-responsive">
				<table class="table table-dark table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Email</th>
							<th>Telefono</th>
							<th>Direccion</th>
							<th>Modificar</th>
							<th>Eliminar</th>
						</tr>
					</thead>

					<tbody>
						<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
							<tr>
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['Nombre']; ?></td>
								<td><?php echo $row['email']; ?></td>
								<td><?php echo $row['telefono']; ?></td>
								<td><?php echo $row['direccion']; ?></td>
								<td><a href="modificar.php?id=<?php echo $row['id']; ?>"><img class="img-ico" src="img/editar.png"></a></td>
								<td><a href="eliminar.php?id=<?php echo $row['id']; ?>" data-toggle="modal" data-target="#confirm-delete"><img class="img-ico" src="img/eliminar.png"></a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>



	</body>
</html>
