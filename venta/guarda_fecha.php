<?php

	require_once("funciones.php");
    print_r($_GET);
	$id_orden = $_GET['id'];
	
	$lat = $_GET['lat'];
		
	$lon = $_GET['lon'];

	$valores = guardaFecha($id_orden,$lat,$lon);

?>