<!DOCTYPE html>
<html lang="es">
<head>
	<title>GRÁFICA</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/dash_grafica.css">

	<!--<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="http://code.highcharts.com/highcharts.js"></script>
	<script src="http://code.highcharts.com/modules/exporting.js"></script>-->

</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

  <a class="navbar-brand" href="#">
    <img src="/st/img/logo.png" alt="logo" style="width:40px;">
  </a>

  <div class="collapse navbar-collapse " id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a style="margin: 5px;" class="nav-link" href="#">SEGUIMIENTO TEOCRÁTICO</a>
      </li>
    </ul>
  </div>

  <form class="form-inline float-lg-right" id="volver">
    <a href="#" class="btn btn-danger btn-sm">VOLVER</a>
  </form> 
  
</nav>

<br>

<div class="container">
	<header class="titulo">
		<strong>GRÁFICA DE MI AÑO DE SERVICIO</strong>
	</header>
</div>
<br>

<!-- Contenedor de gráficos -->
<div class="container" id="contenedor"></div>

<br><br>

<footer class="pie3">
  <div class="container" align="center">
    <a style="margin: 20px" href="https://my.jw.org/home/es" target="_blank"><img id="apps" src="https://assets1.jw.org/images/siteMarkApps_mobile.svg">DOMINIO DE LA CONRGEGACIÓN</a>
  </div>

<br>

  <div class="container" align="center">
    <p id="foot">All rights reserved. Copyrights by Jonathán Sánchez ©</p>
  </div>
</footer>

<script src="lib/high/code/highcharts.js"></script>
<script src="lib/high/code/modules/exporting.js"></script>
<script src="lib/high/code/modules/export-data.js"></script>
<script src="config/recursos.js"></script>
</body>
</html>
