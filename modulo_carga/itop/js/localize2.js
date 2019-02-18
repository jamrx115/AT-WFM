var tendido = 0; 

function localize2(num)
{
	
	tendido = num;
	
	if (navigator.geolocation)
	{
		navigator.geolocation.getCurrentPosition(mapa2,error2);		
	}
	else
	{
		alert('Tu navegador no soporta geolocalizacion.');
	}
}

function mapa2(pos)
{
	
	var latitud = pos.coords.latitude;
	var longitud = pos.coords.longitude;
	var precision = pos.coords.accuracy;
	document.getElementById("latitud_salida").value=latitud;
	document.getElementById("longitud_salida").value=longitud;
	id_orden=document.getElementById("id_orden").value;
	tipo=2;
	$.get('/AT-WFM/venta/guarda_fecha.php',{id:id_orden,lat:latitud,lon:longitud,tipo:tipo},alert("Los datos de hora y coordenadas fueron registrados"));
}

function error2(errorCode)
{
	if(errorCode.code == 1)
		alert("No has permitido buscar tu localizacion")
	else if (errorCode.code==2)
		alert("Posicion no disponible")
	else
		alert("Ha ocurrido un error")
}