<?php

	$conexion = new mysqli ('localhost','root','','st');

	if ($conexion->connect_errno) {
		
		die("Conection Failed: ".$connect_errno);

	}

?>