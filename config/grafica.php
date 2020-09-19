<!DOCTYPE html>
<html lang="es">
<head>
	<title>ST</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/dash_grafica.css">
	<script src="../lib/high/code/highcharts.js"></script>
	<script src="../lib/high/code/modules/exporting.js"></script>
	<script src="../lib/high/code/modules/export-data.js"></script>

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

	<?php

	include "cn.php";

	$sql ="SELECT * FROM enero 
	INNER JOIN febrero ON enero.id_mes = febrero.id_mes 
	INNER JOIN marzo ON enero.id_mes = marzo.id_mes 
	INNER JOIN abril ON enero.id_mes = abril.id_mes 
	INNER JOIN mayo ON enero.id_mes = mayo.id_mes 
	INNER JOIN junio ON enero.id_mes = junio.id_mes 
	INNER JOIN julio ON enero.id_mes = julio.id_mes 
	INNER JOIN agosto ON enero.id_mes = agosto.id_mes 
	INNER JOIN septiembre ON enero.id_mes = septiembre.id_mes 
	INNER JOIN octubre ON enero.id_mes = octubre.id_mes 
	INNER JOIN noviembre ON enero.id_mes = noviembre.id_mes 
	INNER JOIN diciembre ON enero.id_mes = diciembre.id_mes";

	$consulta = mysqli_query ($conexion, $sql);

	while ($resultado = mysqli_fetch_array($consulta)) {
		print_r($resultado);
	}

	include "cl.php";

	?>

	<!-- Contenedor de gráficos -->
	<div class="container" id="contenedor"></div>

	<script>
		Highcharts.chart('contenedor', {
			chart: {
				type: 'column'
			},
			title: {
				text: 'INFORME ANUAL'
			},
			xAxis: {
				categories: [
				'Enero',
				'Febrero',
				'Marzo',
				'Abril',
				'Mayo',
				'Junio',
				'Julio',
				'Agosto',
				'Septiembre',
				'Octubre',
				'Noviembre',
				'Diciembre'
				],
				crosshair: true
			},
			yAxis: {
				min: 0,
				title: {
					text: 'TOTALES POR MES'
				}
			},
			tooltip: {
				headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
				pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
				'<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
				footerFormat: '</table>',
				shared: true,
				useHTML: true
			},
			plotOptions: {
				column: {
					pointPadding: 0.2,
					borderWidth: 0
				}
			},
			series: [{
				name: 'Publicaciones',
				data: [11,12,13,14,15,16,17,18,19,20,21,22]

			}, {
				name: 'Videos',
				data: [22,21,20,19,18,17,16,15,14,13,12,11]

			}, {
				name: 'Horas',
				data: [11,12,13,14,15,16,17,18,19,20,21,22]

			}, {
				name: 'Revisitas',
				data: [22,21,20,19,18,17,16,15,14,13,12,11]

			},{
				name: 'Cursos',
				data: [11,12,13,14,15,16,17,18,19,20,21,22]

			}]
		});

		console.log("Función correcta");

	</script>

	<br><br>

	<footer class="pie3">
		<div class="container" align="center">
			<a style="margin: 20px" href="https://my.jw.org/home/es" target="_blank"><img id="apps" src="https://assets1.jw.org/images/siteMarkApps_mobile.svg">DOMINIO DE LA CONGREGACIÓN</a>
		</div>

		<br>

		<div class="container" align="center">
			<p id="foot">All rights reserved. Copyrights by Jonathán Sánchez ©</p>
		</div>
	</footer>

</body>
</html>