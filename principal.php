<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
	</head>

<?php
$conexion = new mysqli("localhost", "Root", "admin", "inmobiliaria");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}


	$where = "";

	if(!empty($_POST))
	{
		$valor = $_POST['campo'];
		if(!empty($valor)){
			$where = "WHERE nombre LIKE '%$valor'";
		}
	}
	$sql = "SELECT * FROM formulario $where";
	$resultado = $conexion->query($sql);

?>


	<body>


			<div class="row table-responsive">
				<table  class="table table-dark table-striped">
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
						<?php while($row = $resultado->fetch_assoc()) { ?>
							<tr>
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['Nombre']; ?></td>
								<td><?php echo $row['email']; ?></td>
								<td><?php echo $row['telefono']; ?></td>
                <td><?php echo $row['direccion']; ?></td>
								<td><a href="#modificar.php?id=<?php echo $row['id']; ?>">Modificar</a></td>
								<td><a href="#" data-href="eliminar.php?id=<?php echo $row['id']; ?>" data-toggle="modal" data-target="#confirm-delete">Eliminar</a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>

	</body>
</html>
