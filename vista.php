<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="estilos.css">
    <link rel="stylesheet" href="css/vistas.css">
  	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
  	<script src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
    <title></title>
  </head>
  <body>

    <nav class="navbar navbar-light bg-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html"><img class="img-logo" src="img/logo2.png"></a>

        <div class="bg2">
          <h1 class="tit til" onclick="location.href='index.html'" style="cursor: pointer;">INM8BILIARIA LA VECINDAD</h1>
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
              <li class="nav-item">
                <a class="nav-link" href="publicar.html"><img class="busca" src="img/subir-archivo.png"> Publicar</a>
              </li>
            </ul>
            <a class="ov-btn-slide-top" href="login.html">Ingresar</a>
          </div>
        </div>
      </div>
    </nav>

    <?php
    include_once "conex.php";
    $query = "SELECT * FROM formulario ";
    ?>

    <div class="row">
  <div class="example-2 cardt">
    <div class="wrapper">
      <img src="image/casa2.jpg" alt="" style="margin-right: 500px;">
      <div class="data">
        <div class="content">
          <span class="author">Afueras de Bogotá</span>
          <h1 class="title"><a href="#">Casa en condominio</a></h1>
          <p class="text">Casa de condominio con una muy buena ubicación</p>
          <a href="#" class="button">VER MAS</a>
        </div>
      </div>
    </div>
  </div>

  <div class="example-2 cardt">
    <div class="wrapper">
      <img src="image/casa1.jpg" alt="">
      <div class="data">
        <div class="content">
          <span class="author">Bogotá</span>
          <h1 class="title"><a href="#">Casa Rural</a></h1>
          <p class="text">Ubicación a las norte de bogotá con buena vista</p>
          <a href="#" class="button">VER MAS</a>

      </div>
    </div>
  </div>
</div>



    </section>

  </body>
</html>
