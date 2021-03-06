<?php
session_start();

if ($_SESSION['login']!='') {

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<link rel="stylesheet" type="text/css" href="css/slider.css">
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
	<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
	<title>INMOBILIARIA LA VECINDAD</title>
</head>
<body>

<nav class="navbar navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.html"><img class="img-logo" src="img/logo2.png"></a>

    <div class="bg2">
    	<h1 class="tit til" onclick="location.href='index.html'" style="cursor: pointer;">INM8BILIARIA LA VECINDAD</h1>
    </div>

		<div class="">
			<b>Bienvenido <?php echo $_SESSION['login']?></b>

		</div>

    <div class="butn">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img class="img-log" src="img/logo2.png">INMOBILIARIA LA VECINDAD</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html"><img class="busca" src="img/esquema-del-boton-de-inicio-web.png"> Inicio</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img class="busca" src="img/cliente.png"> Servicio al cliente</a>
            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
              <li><a class="dropdown-item" href="#"><img class="busca" src="img/grupo.png"> Acerca de Nosotros</a></li>
              <li><a class="dropdown-item" href="#"><img class="busca" src="img/acuerdo.png"> Normatividad</a></li>
              <li><a class="dropdown-item" href="#"><img class="busca" src="img/libreta-de-contactos.png"> Contactenos</a></li>
            </ul>
          </li>
					<div class="">
						<li>
							<?php
							if($_SESSION['login'] == 'admin@gmail.com') {
								echo "<a class='nav-link' href='principal.php'><img class='busca' src='img/panel.png'> Panel</a>";
							}
							 ?>
						</li>
					</div>
          <li class="nav-item">
            <a class="nav-link" href="publicar.html"><img class="busca" src="img/subir-archivo.png"> Publicar</a>
          </li>
        </ul>
        <a class="ov-btn-slide-top" href="cerrar.php">Cerrrar sesi??n</a>
      </div>
    </div>
  </div>
</nav>

<div class="row g-2" id="cuad-ini">
	<h2 class="tit   tit-bus">Busca tu inmueble</h2>
    <div class="col-md brr">
      <div class="form-floating">
          <input type="text" class="form-control" id="floatingInputGrid"  value="">
          <label for="floatingInputGrid">Ubicaci??n:</label>
      </div>
    </div>
  <div class="col-md brr">
      <div class="form-floating">
          <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
            <option selected>TODOS </option>
            <option value="1">CASA</option>
            <option value="2">APARTAMENTO</option>
            <option value="3">APARTAESTUDIO</option>
            <option value="4">HABITACI??N</option>
            <option value="5">GARAJE</option>
          </select>
          <label for="floatingSelectGrid">Tipo de Inmueble</label>
      </div>
    </div>

    <div class="col-md brr">
      <div class="form-floating">
          <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
        <option value="1">EN VENTA</option>
        <option value="2">EN ARRIENDO</option>
      </select>
      <label for="floatingSelectGrid">Transacci??n</label>
    </div>
  </div>
	<div class="col-md brr">
		<button type="submit" class="btn btn-2">BUSCAR</button>
	</div>

</div>
<br>


 <section>

  <div class="tit-por">
    <h3>Recomendaciones</h3>
  </div>

<div class="bot-column-s3">

        <div class="box" onclick="location.href=''" style="cursor: pointer;">
          <div align="center"><img src="img/casa.png"></div>
          <h2>CASAS</h2>
				</div>

        <div class="box" onclick="location.href=''" style="cursor: pointer;">
            <div align="center"><img src="img/edificio.png"></div>
          <h2>APARTAMENTOS</h2>
				</div>

        <div class="box" onclick="location.href=''" style="cursor: pointer;">
          <div align="center"><img src="img/renta.png"></div>
          <h2>ALQUILER</h2>
          </div>

      </div>

</section>

<script type="text/javascript" src="js/slider.js"></script>

<footer>
</footer>

</body>
</html>

<?php
}else{
	header("Location:index.html");
}
 ?>
