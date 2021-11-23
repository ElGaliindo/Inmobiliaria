<?php

$conexion = new mysqli("localhost", "Root", "admin", "inmobiliaria");
if ($conexion->connect_error) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_error . ") " . $conexion->connect_error;
}

$id = $_REQUEST['id'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];

$qry = "UPDATE formulario SET nombre = '$nombre',direccion = '$direccion'";

 ?>
