$(function(){
	$('#form_ot').submit(function(e){
		var numbers = $('.number-value');

		loop:
		for(var i = 0; i < numbers.length; i++) {
			var number = $(numbers[i]);
			
			if (number.val() && !$.isNumeric(number.val())) {
				e.preventDefault();
				
				$.gritter.add({
                    title: "Error",
                    text: "El campo " + number.closest('.control-group').find('.control-label').text() + " debe ser num\xe9rico" ,
                    fade: true,
                    time: 1500,
                    speed: "fast"
                });
                
				number.attr("data-toggle", "popover");
				number.attr("data-trigger", "focus");
				number.attr("data-content", "Campo num\xe9rico!");
				number.popover('show');
				
				setTimeout(function(){
					number.popover('destroy');
					number.removeAttr("data-toggle");
					number.removeAttr("data-trigger");
					number.removeAttr("data-content");
				}, 2000);
								
				break loop;
			}
		}			
	});
	
	nodo("a");
	nodo("b");
	
	var forward = true;
	var num_herr = 1;
	
	do{
		var obj_find = document.getElementById("new_herraje_" + num_herr);

		if(obj_find != null) {
			add_herraje(num_herr);
		}
		else {
			forward = false;
		}
		
		num_herr++;
		
	}while(forward)
	
	function nodo(nodo) {

		$('#new_nodo_' + nodo).on('click', function(){
			var section = $("#nodo_" + nodo + "_zone");
			var data_rows = parseInt(section.attr("data-rows")) + 1;
			var container_row = $("<div class='row space-between-rows'></div>");
			var deletebtn = $("<div class='col-md-offset-1 col-md-1'><a class='btn btn-danger btn-row-margin btn-delete-nodo-" + nodo + "-row'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a></div>");
			var container = "<div class='col-md-2'><div class='control-group'><label class='control-label'></label><div class='controls'></div></div></div>";
			
			var rack = $(container);
			var odf = $(container);
			var id_diagrama = $(container);
			var conector = $(container);
			var tipo_conector = $(container);
			
			rack.find('.control-label').text("Rack/Tarjeta");
			rack.find('.controls').append($("<input class='form-control' name='rack_" + nodo + "_" + data_rows + "' type='text'>"));
			
			odf.find('.control-label').text("ODF/Puerto");
			odf.find('.controls').append($("<input class='form-control' name='odf_" + nodo + "_" + data_rows + "' type='text'>"));
			
			id_diagrama.find('.control-label').text("Hilo/ID");
			id_diagrama.find('.controls').append($("<input class='form-control number-value' name='id_en_diagrama_" + nodo + "_" + data_rows + "' type='text'>"));
			
			conector.find('.control-label').text("Conector");
			conector.find('.controls').append($("<input class='form-control number-value' name='conector_" + nodo + "_" + data_rows + "' type='text'>"));
			
			tipo_conector.find('.control-label').text("Tipo de conector");
			tipo_conector.find('.controls').append($("<select class='form-control' name='tipo_conector_" + nodo + "_" + data_rows + "'><option selected>SC</option><option>FC</option></select>"));
			
			container_row.append(rack);
			container_row.append(odf);
			container_row.append(id_diagrama);
			container_row.append(conector);
			container_row.append(tipo_conector);
			container_row.append(deletebtn);
			
			section.prepend(container_row);
			section.attr("data-rows", data_rows);
			$('#rows-nodo-' + nodo + '-input').val(data_rows);
			
			delete_row(deletebtn, '.row.space-between-rows')
		});
	}
	
	delete_row($('.btn-delete-nodo-a-row'), '.row.space-between-rows')
	delete_row($('.btn-delete-nodo-b-row'), '.row.space-between-rows')
	
	
	$('#new_tendido').on('click', function(){
		var section = $('#tendido_zone');
		var data_rows = parseInt(section.attr("data-rows")) + 1;
		var container_external = $("<div class='tendido-row'></div>");
		var container_row = "<div class='row space-between-rows'></div>";
		var deletebtn = $("<div class='col-md-offset-11 col-md-1'><a class='btn btn-danger btn-delete-tendido-row'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a></div>");
		var container = "<div class='col-md-2'><div class='control-group'><label class='control-label'></label><div class='controls'></div></div></div>";
		
		var row_del = $(container_row);
		row_del.append(deletebtn);
		var row1 = $(container_row);
		var row2 = $("<div id='herraje-zone-" + data_rows + "' data-rows='1'><input type='hidden' id='rows-herraje-input-" + data_rows + "' name='data-herraje-rows-" + data_rows + "' type='text' value='1'>" + container_row + "</div>");
		
		var tipo = $(container);
		var id_tendido = $(container);
		var long_sig_apo = $(container);
		var latitud = $(container);
		var secuencia_inicial = $(container);
		var secuencia_final = $(container);
		
		var tipo_herraje = $(container);
		var cantidad_herraje = $(container);
				
		
		tipo.find('.control-label').text("Tipo");
		tipo.find('.controls').append($("<select class='form-control' name='tipo_" + data_rows + "'><option>Pozo</option><option>Cliente</option><option>Mufa</option><option>Poste</option><option>Caja de Reg</option></select>"));
		
		id_tendido.find('.control-label').text("ID");
		id_tendido.find('.controls').append($("<input class='form-control' name='id_en_tendido_" + data_rows + "' type='text'>"));
		
		long_sig_apo.find('.control-label').text("Longitud apoyo");
		long_sig_apo.find('.controls').append($("<input class='form-control number-value' name='long_sig_apo_" + data_rows + "' type='text'>"));
		
		latitud.find('.control-label').append($("<a onclick='localize(" + data_rows + ")'>Latitud</a>"));
		latitud.find('.controls').append($("<div class='row'><div class='col-md-6 padding-right-minimum'><input class='form-control number-value' id='latitud_a_" + data_rows + "' name='latitud_a_" + data_rows + "' type='text' ></div><div class='col-md-6 padding-left-minimum'><input class='form-control number-value' id='latitud_b_" + data_rows + "' name='latitud_b_" + data_rows + "' type='text'></div></div>"));
		latitud.find('.control-group').addClass("align-center");
		
		secuencia_inicial.find('.control-label').text("Secuencia inicial");
		secuencia_inicial.find('.controls').append($("<input class='form-control number-value' name='secuencia_ini_" + data_rows + "' type='text'>"));
		
		secuencia_final.find('.control-label').text("Secuencia final");
		secuencia_final.find('.controls').append($("<input class='form-control number-value' name='secuencia_fin_" + data_rows + "' type='text'>"));
		
		tipo_herraje.find('.control-label').text("Tipo");
		tipo_herraje.find('.controls').append($("<select class='form-control' name='herraje_tipo_" + data_rows + "_1'><option>Cruceta</option><option>Poste nuevo</option><option>Mufa nueva</option><option>Instalacion de brazo</option><option>Preformado de remate</option><option>Realiable</option><option>Suspencion</option></select>"));
		
		cantidad_herraje.find('.control-label').text("Cantidad");
		cantidad_herraje.find('.controls').append($("<input class='form-control number-value' name='herraje_cantidad_" + data_rows + "_1' type='text'>"));
		
		
		row1.append(tipo);
		row1.append(id_tendido);
		row1.append(long_sig_apo);
		row1.append(latitud);
		row1.append(secuencia_inicial);
		row1.append(secuencia_final);
		
		row2.find(".row.space-between-rows").append(tipo_herraje);
		row2.find(".row.space-between-rows").append(cantidad_herraje);
					
		container_external.prepend(row2);
		container_external.prepend("<div class='row space-between-rows'><div class='col-md-1'><h4><b>Herraje</b></h4></div><div class='col-md-1'><a id='new_herraje_" + data_rows + "' class='btn btn-success' ><span class='glyphicon glyphicon-plus' aria-hidden='true'></span></a></div></div>");
		container_external.prepend(row1);
		container_external.prepend(row_del);
		
		section.prepend(container_external);
		section.attr("data-rows", data_rows);
		$('#rows-tendido-input').val(data_rows);
		
		add_herraje(data_rows);
		delete_row(deletebtn, '.tendido-row');
	});
	
	
	delete_row($('.btn-delete-tendido-row'), '.tendido-row');
	
	function add_herraje(tendido) {
		
		$('#new_herraje_' + tendido).on('click', function(){
			var section = $('#herraje-zone-' + tendido);
			var data_rows = parseInt(section.attr("data-rows")) + 1;
			var container_row = $("<div class='row space-between-rows'></div>");
			var deletebtn = $("<div class='col-md-offset-1 col-md-1'><a class='btn btn-danger btn-row-margin btn-delete-herraje-row'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a></div>");
			var container = "<div class='col-md-2'><div class='control-group'><label class='control-label'></label><div class='controls'></div></div></div>";
			
			var tipo_herraje = $(container);
			var cantidad_herraje = $(container);
			
			tipo_herraje.find('.control-label').text("Tipo");
			tipo_herraje.find('.controls').append($("<select class='form-control' name='herraje_tipo_" + tendido + "_" + data_rows + "'><option>Cruceta</option><option>Poste nuevo</option><option>Mufa nueva</option><option>Instalacion de brazo</option><option>Preformado de remate</option><option>Realiable</option><option>Suspencion</option></select>"));
			
			cantidad_herraje.find('.control-label').text("Cantidad");
			cantidad_herraje.find('.controls').append($("<input class='form-control number-value' name='herraje_cantidad_" + tendido + "_" + data_rows + "' type='text'>"));
			
			container_row.append(tipo_herraje);
			container_row.append(cantidad_herraje);
			container_row.append(deletebtn);
						
			section.prepend(container_row);
			section.attr("data-rows", data_rows);
			$('#rows-herraje-input-' + tendido).val(data_rows);
			
			delete_row(deletebtn, '.row.space-between-rows');
			
		});	
	}
	
	delete_row($('.btn-delete-herraje-row'), '.row.space-between-rows');
	
	function delete_row(btn, zone) {
		$(btn).on('click', function(){
			var row = $(this).closest(zone);
			row.remove();
		});
	}
	
});