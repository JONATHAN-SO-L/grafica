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

	// Publicaciones
	$pubs_jan = mysqli_query ($conexion, "SELECT publicaciones FROM enero");
	$pubs_feb = mysqli_query ($conexion, "SELECT publicaciones FROM febrero");
	$pubs_mar = mysqli_query ($conexion, "SELECT publicaciones FROM marzo");
	$pubs_apr = mysqli_query ($conexion, "SELECT publicaciones FROM abril");
	$pubs_may = mysqli_query ($conexion, "SELECT publicaciones FROM mayo");
	$pubs_jun = mysqli_query ($conexion, "SELECT publicaciones FROM junio");
	$pubs_jul = mysqli_query ($conexion, "SELECT publicaciones FROM julio");
	$pubs_ago = mysqli_query ($conexion, "SELECT publicaciones FROM agosto");
	$pubs_sep = mysqli_query ($conexion, "SELECT publicaciones FROM septiembre");
	$pubs_oct = mysqli_query ($conexion, "SELECT publicaciones FROM octubre");
	$pubs_nov = mysqli_query ($conexion, "SELECT publicaciones FROM noviembre");
	$pubs_dic = mysqli_query ($conexion, "SELECT publicaciones FROM diciembre");

	// Videos
	$vids_jan = mysqli_query ($conexion, "SELECT videos FROM enero");
	$vids_feb = mysqli_query ($conexion, "SELECT videos FROM febrero");
	$vids_mar = mysqli_query ($conexion, "SELECT videos FROM marzo");
	$vids_apr = mysqli_query ($conexion, "SELECT videos FROM abril");
	$vids_may = mysqli_query ($conexion, "SELECT videos FROM mayo");
	$vids_jun = mysqli_query ($conexion, "SELECT videos FROM junio");
	$vids_jul = mysqli_query ($conexion, "SELECT videos FROM julio");
	$vids_ago = mysqli_query ($conexion, "SELECT videos FROM agosto");
	$vids_sep = mysqli_query ($conexion, "SELECT videos FROM septiembre");
	$vids_oct = mysqli_query ($conexion, "SELECT videos FROM octubre");
	$vids_nov = mysqli_query ($conexion, "SELECT videos FROM noviembre");
	$vids_dic = mysqli_query ($conexion, "SELECT videos FROM diciembre");

	// Horas
	$horas_jan = mysqli_query ($conexion, "SELECT horas FROM enero");
	$horas_feb = mysqli_query ($conexion, "SELECT horas FROM febrero");
	$horas_mar = mysqli_query ($conexion, "SELECT horas FROM marzo");
	$horas_apr = mysqli_query ($conexion, "SELECT horas FROM abril");
	$horas_may = mysqli_query ($conexion, "SELECT horas FROM mayo");
	$horas_jun = mysqli_query ($conexion, "SELECT horas FROM junio");
	$horas_jul = mysqli_query ($conexion, "SELECT horas FROM julio");
	$horas_ago = mysqli_query ($conexion, "SELECT horas FROM agosto");
	$horas_sep = mysqli_query ($conexion, "SELECT horas FROM septiembre");
	$horas_oct = mysqli_query ($conexion, "SELECT horas FROM octubre");
	$horas_nov = mysqli_query ($conexion, "SELECT horas FROM noviembre");
	$horas_dic = mysqli_query ($conexion, "SELECT horas FROM diciembre");

	// Revisitas
	$revs_jan = mysqli_query ($conexion, "SELECT revisitas FROM enero");
	$revs_feb = mysqli_query ($conexion, "SELECT revisitas FROM febrero");
	$revs_mar = mysqli_query ($conexion, "SELECT revisitas FROM marzo");
	$revs_apr = mysqli_query ($conexion, "SELECT revisitas FROM abril");
	$revs_may = mysqli_query ($conexion, "SELECT revisitas FROM mayo");
	$revs_jun = mysqli_query ($conexion, "SELECT revisitas FROM junio");
	$revs_jul = mysqli_query ($conexion, "SELECT revisitas FROM julio");
	$revs_ago = mysqli_query ($conexion, "SELECT revisitas FROM agosto");
	$revs_sep = mysqli_query ($conexion, "SELECT revisitas FROM septiembre");
	$revs_oct = mysqli_query ($conexion, "SELECT revisitas FROM octubre");
	$revs_nov = mysqli_query ($conexion, "SELECT revisitas FROM noviembre");
	$revs_dic = mysqli_query ($conexion, "SELECT revisitas FROM diciembre");

	// Cursos
	$cbs_jan = mysqli_query ($conexion, "SELECT cursos FROM enero");
	$cbs_feb = mysqli_query ($conexion, "SELECT cursos FROM febrero");
	$cbs_mar = mysqli_query ($conexion, "SELECT cursos FROM marzo");
	$cbs_apr = mysqli_query ($conexion, "SELECT cursos FROM abril");
	$cbs_may = mysqli_query ($conexion, "SELECT cursos FROM mayo");
	$cbs_jun = mysqli_query ($conexion, "SELECT cursos FROM junio");
	$cbs_jul = mysqli_query ($conexion, "SELECT cursos FROM julio");
	$cbs_ago = mysqli_query ($conexion, "SELECT cursos FROM agosto");
	$cbs_sep = mysqli_query ($conexion, "SELECT cursos FROM septiembre");
	$cbs_oct = mysqli_query ($conexion, "SELECT cursos FROM octubre");
	$cbs_nov = mysqli_query ($conexion, "SELECT cursos FROM noviembre");
	$cbs_dic = mysqli_query ($conexion, "SELECT cursos FROM diciembre");

	include "cl.php";

	while ($jan = mysqli_fetch_array($pubs_jan)) {
		print_r($jan);
		echo "<br>";
	}

	while ($feb = mysqli_fetch_array($pubs_feb)) {
		print_r($feb);
		echo "<br>";
	}

	while ($mar = mysqli_fetch_array($pubs_mar)) {
		print_r($mar);
		echo "<br>";
	}

	while ($apr = mysqli_fetch_array($pubs_apr)) {
		print_r($apr);
		echo "<br>";
	}

	while ($may = mysqli_fetch_array($pubs_may)) {
		print_r($may);
		echo "<br>";
	}

	while ($jun = mysqli_fetch_array($pubs_jun)) {
		print_r($jun);
		echo "<br>";
	}

	while ($jul = mysqli_fetch_array($pubs_jul)) {
		print_r($jul);
		echo "<br>";
	}

	while ($ago = mysqli_fetch_array($pubs_ago)) {
		print_r($ago);
		echo "<br>";
	}

	while ($sep = mysqli_fetch_array($pubs_sep)) {
		print_r($sep);
		echo "<br>";
	}

	while ($oct = mysqli_fetch_array($pubs_oct)) {
		print_r($oct);
		echo "<br>";
	}

	while ($nov = mysqli_fetch_array($pubs_nov)) {
		print_r($nov);
		echo "<br>";
	}

	while ($dic = mysqli_fetch_array($pubs_dic)) {
		print_r($dic);
		echo "<br><br>";
	}

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