<?php

$conexion = new mysqli("localhost", "Root", "admin", "inmobiliaria");
if ($conexion->connect_error) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_error . ") " . $conexion->connect_error;
}

 ?>
