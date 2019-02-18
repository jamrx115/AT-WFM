<?php

	require_once("funciones.php");
	//Variable de búsqueda
	$consultaBusqueda = $_POST['valorBusqueda'];

	$consultaBusqueda = str_replace($caracteres_malos, $caracteres_buenos, $consultaBusqueda);
	
	//Variable vacía (para evitar los E_NOTICE)
	$mensaje = "";

?>