<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="bootstrap-3.3.6/dist/js/bootstrap.min.js"></script>
	<script src="https://maps.google.com/maps/api/js?sensor=false"></script>     
	
    <link rel="stylesheet" href="bootstrap-3.3.6/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-3.3.6/dist/css/bootstrap-theme.min.css">
	
	<link   href="js/Gritter-master/css/jquery.gritter.css" rel="stylesheet">
    <script src="js/Gritter-master/js/jquery.gritter.js"></script>
    
	<link   href="css/mystyles.css" rel="stylesheet">
	<script src="js/myeffects.js"></script>
	<script src="js/localize.js"></script>
</head>
 
<body>
    	
	<?php
		include 'database.php';
	   
		$id_orden = $_GET['idOrden'];
	   
		$pdo = Database::connect();
		$sql_portada = "SELECT *
				FROM portada as p 
				WHERE p.id_orden = " . $id_orden;
		
		$sql_diagramas = "SELECT *
				FROM diagrama_reporte
				WHERE id_orden = " . $id_orden . 
				" ORDER BY id_diagrama ASC";
		
		$sql_tendidos = "SELECT *
				FROM tendido_reporte
				WHERE id_orden = " . $id_orden . 
				" ORDER BY id_tendido ASC";
				
		$sql_herrajes = "SELECT h.*
				FROM herraje as h
					JOIN tendido_reporte as t ON (h.id_tendido = t.id_tendido)
				WHERE t.id_orden = " . $id_orden . 
				" ORDER BY h.id_herraje ASC";
				
		$sql_user = "SELECT *
					FROM view_UserRequest
					WHERE id = " . $id_orden;
					
		$sql_status = "SELECT *
						FROM vw_ValidaEstado
						WHERE id= " . $id_orden;
		
		$query_portada =  $pdo->prepare($sql_portada);
		$query_portada->execute();
		
		$query_diagramas =  $pdo->prepare($sql_diagramas);
		$query_diagramas->execute();
		
		$query_tendidos =  $pdo->prepare($sql_tendidos);
		$query_tendidos->execute();
		
		$query_herrajes =  $pdo->prepare($sql_herrajes);
		$query_herrajes->execute();
		
		$query_user = $pdo->prepare($sql_user);
		$query_user->execute();
		
		$query_status = $pdo->prepare($sql_status);
		$query_status->execute();
		
		$result_diagramas_a = array();
		$result_diagramas_b = array();
		$result_query_diagramas = $query_diagramas->fetch(PDO::FETCH_ASSOC);
		
		do {
			if($result_query_diagramas['nodo'] == 'A') {
				$result_diagramas_a[] = $result_query_diagramas;
			}
			else {
				$result_diagramas_b[] = $result_query_diagramas;
			}
			
			$result_query_diagramas = $query_diagramas->fetch(PDO::FETCH_ASSOC);
			
		} while(!empty($result_query_diagramas));
		
		
		$result_herrajes = array();
		$result_query_herrajes = $query_herrajes->fetch(PDO::FETCH_ASSOC);
		
		do {
			if(!isset($result_herrajes[$result_query_herrajes['id_tendido']])) {
				$result_herrajes[$result_query_herrajes['id_tendido']] = array();
			}
			
			$result_herrajes[$result_query_herrajes['id_tendido']][] = $result_query_herrajes;
			$result_query_herrajes = $query_herrajes->fetch(PDO::FETCH_ASSOC);
			
		} while(!empty($result_query_herrajes));
		

		$result_tendidos = array();
		$result_query_tendidos = $query_tendidos->fetch(PDO::FETCH_ASSOC);
		
		do {
			if(isset($result_herrajes[$result_query_tendidos['id_tendido']])) {
				$result_query_tendidos['herrajes'] = $result_herrajes[$result_query_tendidos['id_tendido']];
			}
			
			$result_tendidos[] = $result_query_tendidos;
			$result_query_tendidos = $query_tendidos->fetch(PDO::FETCH_ASSOC);
			
		} while(!empty($result_query_tendidos));
		
		$result_portada = $query_portada->fetch(PDO::FETCH_ASSOC);
		$result_user = $query_user->fetch(PDO::FETCH_ASSOC);
		$result_status = $query_status->fetch(PDO::FETCH_ASSOC);

		if(empty($result_status)) {
			header("Location: closedot.html");
		}
		
	?>
	
	<div class="container">
		<div class="row align-center">
			<h2><b>ANEXO ORDEN DE TRABAJO Nº <?php echo $result_user['num_ot']; ?></b></h2>
		</div>
	</div>
	
	<div class="top-line-gray"></div>
	
	<div class="container">
		<div class="row" style="margin-bottom: 15px;">
			<p>
				<ul class="list-none-style">
					<li>Número de instalación: <b><?php echo $result_user['num_instal']; ?></b></li>
					<li>Cliente: <b><?php echo $result_user['nom_cliente']; ?></b></li>
					<li>Fecha de ejecución: <b><?php echo $result_user['fecha_ejecucion'] . " " . $result_user['hora_ejecucion']; ?></b></li>
					<li>Grupo: <b><?php echo $result_user['team_id_friendlyname']; ?></b></li>
					<li>Responsable orden: <b><?php echo $result_user['agent_id_friendlyname']; ?></b></li>
				</ul>
			</p>
		</div>
	</div>
	
	<?php if(empty($result_portada)) : ?>
	
	<div class="container">
	
		<form id="form_ot" action="create.php?idOrden=<?php echo $id_orden; ?>" method="post">	
			
			<ul class="nav nav-tabs">
				<li class="active"><a  data-toggle="tab" href="#seccion_portada">Portada</a></li>
				<li><a  data-toggle="tab" href="#seccion_diagrama">Diagrama</a></li>
				<li><a  data-toggle="tab" href="#seccion_tendido">Tendido</a></li>
			</ul>
			
			<div class="space"></div>
			
			<div class="tab-content" style="overflow: hidden;">
				<div id="seccion_portada" class="tab-pane fade in active">
					<div class="row space-between-rows">
						<div class="col-md-4">
							<div class="control-group">
								<label class="control-label">Nodo</label>
								<div class="controls">
									<input class="form-control" name="nodo" type="text">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="control-group">
								<label class="control-label">Habilitación</label>
								<div class="controls">
									<select class="form-control" name="habilitacion"><option>Si</option><option selected>No</option></select>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="control-group">
								<label class="control-label">Factibilidad de servicio</label>
								<div class="controls">
									<select class="form-control" name="factibilidad_servicio"><option>Si</option><option selected>No</option></select>
								</div>
							</div>
						</div>
					</div>
				
					<div class="row space-between-rows">
						<div class="col-md-4">
							<div class="control-group">
								<label class="control-label">ID Nodo</label>
								<div class="controls">
									<input class="form-control" name="id_nodo" type="text">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="control-group">
								<label class="control-label">Tendido</label>
								<div class="controls">
									<select class="form-control" name="tendido"><option>Si</option><option selected>No</option></select>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="control-group">
								<label class="control-label">Canalizado</label>
								<div class="controls">
									<select class="form-control" name="canalizado"><option>Si</option><option selected>No</option></select>
								</div>
							</div>
						</div>
					</div>
						
					<div class="row space-between-rows">
						<div class="col-md-4">
							<div class="control-group">
								<label class="control-label">Distancia</label>
								<div class="controls">
									<input class="form-control number-value" name="distancia" type="text">
								</div>
							</div>
						</div>
						
						<div class="col-md-4">
							<div class="control-group">
								<label class="control-label">Enrutado</label>
								<div class="controls">
									<select class="form-control" name="enrutado"><option>Si</option><option selected>No</option></select>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="control-group">
								<label class="control-label">Postes</label>
								<div class="controls">
									<select class="form-control" name="postes"><option>Si</option><option selected>No</option></select>
								</div>
							</div>
						</div>
					</div>
					<div class="row space-between-rows">
						<div class="col-md-4"></div>
						<div class="col-md-4">
							<div class="control-group">
								<label class="control-label">Retiro F.O.</label>
								<div class="controls">
									<select class="form-control" name="retiro_fo"><option>Si</option><option selected>No</option></select>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="control-group">
								<label class="control-label">Ducto</label>
								<div class="controls">
									<select class="form-control" name="ducto"><option>Si</option><option selected>No</option></select>
								</div>
							</div>
						</div>
					</div>
				
					<div class="row space-between-rows">
						<div class="col-md-4"></div>
						<div class="col-md-4">
							<div class="control-group">
								<label class="control-label">Instalación C.T.</label>
								<div class="controls">
									<select class="form-control" name="instalacion_ct"><option>Si</option><option selected>No</option></select>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="control-group">
								<label class="control-label">Traslado</label>
								<div class="controls">
									<select class="form-control" name="traslado"><option>Si</option><option selected>No</option></select>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				
				<div id="seccion_diagrama" class="tab-pane fade">
					<div class="diagrama-row">
						<div class="row space-between-rows">
							<div class="col-md-2">
								<h4><b>Nodo A</b></h4>
							</div>
							<div class="col-md-10">
								<div class="pull-right below-under-line">
									<a id="new_nodo_a" class="btn btn-success" ><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
								</div>
							</div>
						</div>
						<div id="nodo_a_zone" data-rows="1">
							<input type='hidden' id="rows-nodo-a-input" name='data-nodo-a-rows' type='text' value="1">
							<div class="row space-between-rows">
								<div class="col-md-2">
									<div class="control-group">
										<label class="control-label">Rack/Tarjeta</label>
										<div class="controls">
											<input class="form-control" name="rack_a_1" type="text" >
										</div>
									</div>
								</div>
								<div class="col-md-2">
									<div class="control-group">
										<label class="control-label">ODF/Puerto</label>
										<div class="controls">
											<input class="form-control" name="odf_a_1" type="text" >
										</div>
									</div>
								</div>
								<div class="col-md-2">
									<div class="control-group">
										<label class="control-label">Hilo/ID</label>
										<div class="controls">
											<input class="form-control number-value" name="id_en_diagrama_a_1" type="text" >
										</div>
									</div>
								</div>
								<div class="col-md-2">
									<div class="control-group">
										<label class="control-label">Conector</label>
										<div class="controls">
											<input class="form-control number-value" name="conector_a_1" type="text" >
										</div>
									</div>
								</div>
								<div class="col-md-2">
									<div class="control-group">
										<label class="control-label">Tipo de conector</label>
										<div class="controls">
											<select class="form-control" name="tipo_conector_a_1"><option selected>SC</option><option>FC</option></select>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="diagrama-row">
						<div class="row space-between-rows">
							<div class="col-md-2">
								<h4><b>Nodo B</b></h4>
							</div>
							<div class="col-md-10">
								<div class="pull-right below-under-line">
									<a id="new_nodo_b" class="btn btn-success" ><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
								</div>
							</div>
						</div>
						<div id="nodo_b_zone" data-rows="1">
							<input type='hidden' id="rows-nodo-b-input" name='data-nodo-b-rows' type='text' value="1">
							<div class="row space-between-rows">
								<div class="col-md-2">
									<div class="control-group">
										<label class="control-label">Rack/Tarjeta</label>
										<div class="controls">
											<input class="form-control" name="rack_b_1" type="text" >
										</div>
									</div>
								</div>
								<div class="col-md-2">
									<div class="control-group">
										<label class="control-label">ODF/Puerto</label>
										<div class="controls">
											<input class="form-control" name="odf_b_1" type="text" >
										</div>
									</div>
								</div>
								<div class="col-md-2">
									<div class="control-group">
										<label class="control-label">Hilo/ID</label>
										<div class="controls">
											<input class="form-control number-value" name="id_en_diagrama_b_1" type="text" >
										</div>
									</div>
								</div>
								<div class="col-md-2">
									<div class="control-group">
										<label class="control-label">Conector</label>
										<div class="controls">
											<input class="form-control number-value" name="conector_b_1" type="text" >
										</div>
									</div>
								</div>
								<div class="col-md-2">
									<div class="control-group">
										<label class="control-label">Tipo de conector</label>
										<div class="controls">
											<select class="form-control" name="tipo_conector_b_1"><option selected>SC</option><option>FC</option></select>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				
				
				<div id="seccion_tendido" class="tab-pane fade">
				
					<div class="row space-between-rows">
						<div class="col-md-12">
							<div class="pull-right below-under-line">
								<a id="new_tendido" class="btn btn-success" ><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							</div>
						</div>
					</div>
				
					<div id="tendido_zone" data-rows="1">
						<input type='hidden' id="rows-tendido-input" name='data-tendido-rows' type='text' value="1">
						<div class="tendido-row">
							<div class="row space-between-rows">
								<div class="col-md-2">
									<div class="control-group">
										<label class="control-label">Tipo</label>
										<div class="controls">
											<select class="form-control" name="tipo_1"><option>Pozo</option><option>Cliente</option><option>Mufa</option><option>Poste</option><option>Caja de Reg</option></select>
										</div>
									</div>
								</div>
								<div class="col-md-2">
									<div class="control-group">
										<label class="control-label">ID</label>
										<div class="controls">
											<input class="form-control" name="id_en_tendido_1" type="text" >
										</div>
									</div>
								</div>
								<div class="col-md-2">
									<div class="control-group">
										<label class="control-label">Longitud apoyo</label>
										<div class="controls">
											<input class="form-control number-value" name="long_sig_apo_1" type="text" >
										</div>
									</div>
								</div>
								<div class="col-md-2">
									<div class="control-group align-center">
										<label class="control-label"><a onClick="localize(1)">Latitud</a></label>
										<div class="controls">
											<div class="row">
												<div class="col-md-6 padding-right-minimum">
													<input class="form-control number-value" id="latitud_a_1" name="latitud_a_1" type="text" >
												</div>
												<div class="col-md-6 padding-left-minimum">
													<input class="form-control number-value" id="latitud_b_1" name="latitud_b_1" type="text" >
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-2">
									<div class="control-group">
										<label class="control-label">Secuencia inicial</label>
										<div class="controls">
											<input class="form-control number-value" name="secuencia_ini_1" type="text" >
										</div>
									</div>
								</div>
								<div class="col-md-2">
									<div class="control-group">
										<label class="control-label">Secuencia final</label>
										<div class="controls">
											<input class="form-control number-value" name="secuencia_fin_1" type="text" >
										</div>
									</div>
								</div>
							</div>
							
							<div class="row space-between-rows">
								<div class="col-md-1">
									<h4><b>Herraje</b></h4>
								</div>
								<div class="col-md-1">
									<a id="new_herraje_1" class="btn btn-success" ><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
								</div>
							</div>
							
							<div id="herraje-zone-1" data-rows="1">
								<input type='hidden' id="rows-herraje-input-1" name='data-herraje-rows-1' type='text' value="1">
								<div class="row space-between-rows">
									<div class="col-md-2">
										<div class="control-group">
											<label class="control-label">Tipo</label>
											<div class="controls">
												<select class="form-control" name="herraje_tipo_1_1"><option>Cruceta</option><option>Poste nuevo</option><option>Mufa nueva</option><option>Instalacion de brazo</option><option>Preformado de remate</option><option>Realiable</option><option>Suspencion</option></select>
											</div>
										</div>
									</div>
									<div class="col-md-2">
										<div class="control-group">
											<label class="control-label">Cantidad</label>
											<div class="controls">
												<input class="form-control number-value" name="herraje_cantidad_1_1" type="text" >
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				


			</div>
			<div class="under-line-gray"></div>
			<div class="space"></div>
			<div class="row">
				<div class="col-md-12">
					<div class="pull-right below-under-line">
						<button type="submit" class="btn btn-success">Aceptar</button>
					</div>
				</div>
			</div>
		</form>	
	</div>			
	
	<?php else : ?>
	
	<div class="container">
	
		<div class="row">
			<div class="col-md-12">
				<div class="pull-right">
					<a class="btn btn-success" href="update.php?idOrden=<?php echo $id_orden ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
					<a class="btn btn-danger" href="delete.php?idOrden=<?php echo $id_orden ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
				</div>
			</div>
		</div>
		
		<div class="space"></div>
		
		<div class="row">
			<div class="col-md-12">
					  
				<!-- PORTADA -->
				
				<div class="table-responsive">
				
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No. Instalación</th>
								<th>Nodo</th>
								<th>ID Nodo</th>
								<th>Distancia</th>
								<th>Habilitación</th>
								<th>Enrutado</th>
								<th>Tendido</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td> <?php echo $result_user['num_instal']; ?> </td>
								<td> <?php echo $result_portada['Nodo']; ?> </td>
								<td> <?php echo $result_portada['id_nodo']; ?> </td>
								<td> <?php echo $result_portada['distancia']; ?> </td>
								<td> <?php echo $result_portada['Habilitacion']; ?> </td>
								<td> <?php echo $result_portada['Enrutado']; ?> </td>
								<td> <?php echo $result_portada['Tendido']; ?> </td>
							</tr>
						</tbody>
						<thead>
							<tr>
								<th>Canalizado</th>
								<th>Factibilidad de servicio</th>
								<th>Postes</th>
								<th>Retiro F.O.</th>
								<th>Ducto</th>
								<th>Instalación C.T.</th>
								<th>Traslado</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td> <?php echo $result_portada['Canalizado']; ?> </td>
								<td> <?php echo $result_portada['Facti_Servicio']; ?> </td>
								<td> <?php echo $result_portada['postes']; ?> </td>
								<td> <?php echo $result_portada['retiro']; ?> </td>
								<td> <?php echo $result_portada['ducto']; ?> </td>
								<td> <?php echo $result_portada['instal_ct']; ?> </td>
								<td> <?php echo $result_portada['traslado']; ?> </td>
							</tr>
						</tbody>
					</table>
				</div>
				
				<!-- DIAGRAMA -->
				
				<div class="table-responsive">
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Nodo</th>
								<th>Rack/Tarjeta</th>
								<th>ODF/Puerto</th>
								<th>Hilo/ID</th>
								<th>Conector</th>
								<th>Tipo de conector</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($result_diagramas_a as $row)
								echo	"<tr>
											<td> Nodo {$row['nodo']} </td>
											<td> {$row['rack']} </td>
											<td> {$row['odf']} </td>
											<td> {$row['hilo']} </td>
											<td> {$row['conector']} </td>
											<td> {$row['tipo_conector']} </td>
										</tr>";
										
							foreach ($result_diagramas_b as $row)
								echo	"<tr>
											<td> Nodo {$row['nodo']} </td>
											<td> {$row['rack']} </td>
											<td> {$row['odf']} </td>
											<td> {$row['hilo']} </td>
											<td> {$row['conector']} </td>
											<td> {$row['tipo_conector']} </td>
										</tr>";
							?>
						</tbody>
					</table>
				</div>
					
				<!-- TENDIDO -->
				
				<div class="table-responsive">	
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Tipo</th>
								<th>ID</th>
								<th>Longitud a siguiente apoyo</th>
								<th>Latitud</th>
								<th>Longitud</th>
								<th>Secuencia inicial</th>
								<th>Secuencia final</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($result_tendidos as $row) {
								echo	"<tr>
											<td> {$row['tipo_tendido']} </td>
											<td> {$row['id_elemento']} </td>
											<td> {$row['longitud_siguiente']} </td>
											<td> {$row['latitud']} </td>
											<td> {$row['longitud']} </td>
											<td> {$row['secuencia_ini']} </td>
											<td> {$row['secuencia_fin']} </td>
										</tr>";
								
								echo 	"<tr>
											<th>Tipo</th>
											<th>Cantidad</th>
										</tr>";
								
								foreach ($row['herrajes'] as $herraje) 
									echo	"<tr>
												<td> {$herraje['herraje_tipo']} </td>
												<td> {$herraje['cantidad']} </td>
											</tr>";
							}
							?>
						</tbody>
					</table>
				</div>
				
				
			</div>
        </div>
    </div>
	<?php endif; ?>
  </body>
</html>


