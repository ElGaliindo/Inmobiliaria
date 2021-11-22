<?php
if (isset($_POST['enviar'])) {
$conexion = new mysqli("localhost", "Root", "admin", "inmobiliaria");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}

$Nombre = $_POST['Nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$oferta = $_POST['oferta'];
$inmueble = $_POST['inmueble'];
$ubicacion = $_POST['ubicacion'];
$barrio = $_POST['barrio'];
$direccion = $_POST['direccion'];
$precio = $_POST['precio'];
$estrato = $_POST['estrato'];
$area = $_POST['area'];
$ambientes = $_POST['ambientes'];
$num_habita = $_POST['num_habita'];
$baños = $_POST['baños'];
$pisos = $_POST['pisos'];
$estado = $_POST['estado'];
$arch = $_FILES['arch']['tmp_name'];


$insetSQl = " INSERT INTO formulario SET Nombre = '$Nombre',email = '$email',telefono = '$telefono',oferta = '$oferta',inmueble = '$inmueble',
ubicacion = '$ubicacion',barrio = '$barrio',direccion = '$direccion',precio = '$precio',estrato = '$estrato',area = '$area',
ambientes = '$ambientes',num_habita = '$num_habita',baños = '$baños',pisos = '$pisos',estado ='$estado',arch = '$arch' ";

  if ($conexion->query($insetSQl)) {
    $conexion->close();
    echo "<script>
            alert('Se envio exitosamente');
                    window.location='publicar.html?'
                  </script>";
  }else{
    echo "Error" . $insetSQl . "<br>" .$conexion->close();;
  }

}

 ?>
