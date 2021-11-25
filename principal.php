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
								<td><a href="#" data-href="eliminar.php?id=<?php echo $row['id']; ?>" data-toggle="modal" data-target="#confirm-delete"><img class="img-ico" src="img/eliminar.png"></a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">

					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
					</div>

					<div class="modal-body">
						¿Desea eliminar este registro?
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<a class="btn btn-danger btn-ok">Delete</a>
					</div>
				</div>
			</div>
		</div>

		<script>
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>

	</body>
</html>
