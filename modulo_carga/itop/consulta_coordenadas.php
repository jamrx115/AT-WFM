<?php

	require_once("funciones.php");
	//Variable de b�squeda
	$consultaBusqueda = $_POST['valorBusqueda'];

	$consultaBusqueda = str_replace($caracteres_malos, $caracteres_buenos, $consultaBusqueda);
	
	//Variable vac�a (para evitar los E_NOTICE)
	$mensaje = "";

?>