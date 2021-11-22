<?php

if (isset($_POST['iniciar'])) {

session_start();

$conexion = new mysqli("localhost", "Root", "admin", "inmobiliaria");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_error . ") " . $conexion->connect_error;
}

$Email = $_POST['Email'];
$contraseña = $_POST['contraseña'];

$user = "admin@gmail.com";
$pass = "admin123";

  $q = " SELECT COUNT(*)as contar from login where Email = '$Email' and contraseña = '$contraseña' ";
  $consult = mysqli_query($conexion, $q);

if ($_POST['Email']==$Email && $_POST['contraseña']==$contraseña) {
$_SESSION['login']= $user;
    $_SESSION['login']= $Email;
    header("Location:index2.php");
  }else{
    echo "<script>
            alert('Datos incorrectos');
            window.location='login.html?'
          </script>";
  }

  }

 ?>
