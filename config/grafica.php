<?php

	header('Content-type: application/json');

	include "cn.php";

	$data_jan = mysqli_query ($conexion, "SELECT * FROM enero");
	$data_feb = mysqli_query ($conexion, "SELECT * FROM febrero");
	$data_mar = mysqli_query ($conexion, "SELECT * FROM marzo");
	$data_apr = mysqli_query ($conexion, "SELECT * FROM abril");
	$data_may = mysqli_query ($conexion, "SELECT * FROM mayo");
	$data_jun = mysqli_query ($conexion, "SELECT * FROM junio");
	$data_jul = mysqli_query ($conexion, "SELECT * FROM julio");
	$data_ago = mysqli_query ($conexion, "SELECT * FROM agosto");
	$data_sep = mysqli_query ($conexion, "SELECT * FROM septiembre");
	$data_oct = mysqli_query ($conexion, "SELECT * FROM octubre");
	$data_nov = mysqli_query ($conexion, "SELECT * FROM noviembre");
	$data_dic = mysqli_query ($conexion, "SELECT * FROM diciembre");

	$jan = mysqli_fetch_array($data_jan);
	$feb = mysqli_fetch_array($data_feb);
	$mar = mysqli_fetch_array($data_mar);
	$apr = mysqli_fetch_array($data_apr);
	$may = mysqli_fetch_array($data_may);
	$jun = mysqli_fetch_array($data_jun);
	$jul = mysqli_fetch_array($data_jul);
	$ago = mysqli_fetch_array($data_ago);
	$sep = mysqli_fetch_array($data_sep);
	$oct = mysqli_fetch_array($data_oct);
	$nov = mysqli_fetch_array($data_nov);
	$dic = mysqli_fetch_array($data_dic);

	print json_encode($jan);
	print json_encode($feb);
	print json_encode($mar);
	print json_encode($apr);
	print json_encode($may);
	print json_encode($jun);
	print json_encode($jul);
	print json_encode($ago);
	print json_encode($sep);
	print json_encode($oct);
	print json_encode($nov);
	print json_encode($dic);

	include "cl.php";

?>