<?php
    require 'database.php';
 
	$id_orden = $_GET['idOrden'];
	
    if ( !empty($_POST)) {
       
		$nodo = $_POST['nodo'];
        $id_nodo = $_POST['id_nodo'];
        $distancia = $_POST['distancia'];
        $habilitacion = $_POST['habilitacion'];
        $enrutado = $_POST['enrutado'];
        $tendido = $_POST['tendido'];
        $canalizado = $_POST['canalizado'];
        $factibilidad_servicio = $_POST['factibilidad_servicio'];
        $postes = $_POST['postes'];
        $retiro_fo = $_POST['retiro_fo'];
        $ducto = $_POST['ducto'];
        $instalacion_ct = $_POST['instalacion_ct'];
        $traslado = $_POST['traslado'];
		
		//Datos Diagrama
		$nodos_a = 1;
		$tipo_conector_a = array();;
		$id_en_diagrama_a = array();;
		$conector_a = array();;
		$rack_a = array();
		$odf_a = array();
		$id_a = array();
		
		$nodos_b = 1;
		$tipo_conector_b = array();;
		$id_en_diagrama_b = array();;
		$conector_b = array();;
		$rack_b = array();
		$odf_b = array();
		$id_b = array();
		
		$rows_nodos_a = $_POST['data-nodo-a-rows'];
		$rows_nodos_b = $_POST['data-nodo-b-rows'];
		
		for($i = 1; $i <= $rows_nodos_a; $i++) {
			if (isset($_POST['rack_a_' . $i]) && isset($_POST['odf_a_' . $i]) && isset($_POST['id_en_diagrama_a_' . $i]) && isset($_POST['conector_a_' . $i]) && isset($_POST['tipo_conector_a_' . $i])) {
				$id_a[$nodos_a] = (isset($_POST['id_nodo_a_' . $i])) ? $_POST['id_nodo_a_' . $i] : 0;
				$rack_a[$nodos_a] = $_POST['rack_a_' . $i];
				$odf_a[$nodos_a] = $_POST['odf_a_' . $i];
				$id_en_diagrama_a[$nodos_a] = $_POST['id_en_diagrama_a_' . $i];
				$conector_a[$nodos_a] = $_POST['conector_a_' . $i];
				$tipo_conector_a[$nodos_a] = $_POST['tipo_conector_a_' . $i];
				$nodos_a++;
			}
		}
		
		for($i = 1; $i <= $rows_nodos_b; $i++) {
			if (isset($_POST['rack_b_' . $i]) && isset($_POST['odf_b_' . $i]) && isset($_POST['id_en_diagrama_b_' . $i]) && isset($_POST['conector_b_' . $i]) && isset($_POST['tipo_conector_b_' . $i])) {
				$id_b[$nodos_b] = (isset($_POST['id_nodo_b_' . $i])) ? $_POST['id_nodo_b_' . $i] : 0;
				$rack_b[$nodos_b] = $_POST['rack_b_' . $i];
				$odf_b[$nodos_b] = $_POST['odf_b_' . $i];
				$id_en_diagrama_b[$nodos_b] = $_POST['id_en_diagrama_b_' . $i];
				$conector_b[$nodos_b] = $_POST['conector_b_' . $i];
				$tipo_conector_b[$nodos_b] = $_POST['tipo_conector_b_' . $i];
				$nodos_b++;
			}
		}
	
		//Datos Tendido
		$tendidos = 1;
		$id_tendido = array();
		$tipo = array();
		$id_en_tendido = array();
		$long_sig_apo = array();
		$latitud_a = array();
		$latitud_b = array();
		$secuencia_inicial = array();
		$secuencia_final = array();
		$rows_tendidos = $_POST['data-tendido-rows'];
		
		$herrajes = array();
		$tipo_herraje = array();
		$cantidad_herraje = array();
		
		for($i = 1; $i <= $rows_tendidos; $i++) {
			if(isset($_POST['tipo_' . $i]) && isset($_POST['id_en_tendido_' . $i])) {
				$id_tendido[$tendidos] = (isset($_POST['id_tendido_' . $i])) ? $_POST['id_tendido_' . $i] : 0;
				$tipo[$tendidos] = $_POST['tipo_' . $i];
				$id_en_tendido[$tendidos] = $_POST['id_en_tendido_' . $i];
				$long_sig_apo[$tendidos] = $_POST['long_sig_apo_' . $i];
				$latitud_a[$tendidos] = $_POST['latitud_a_' . $i];
				$latitud_b[$tendidos] = $_POST['latitud_b_' . $i];
				$secuencia_inicial[$tendidos] = $_POST['secuencia_ini_' . $i];
				$secuencia_final[$tendidos] = $_POST['secuencia_fin_' . $i];
				
				$rows_herrajes = $_POST['data-herraje-rows-' . $i];
				$herrajes[$tendidos] = 1;
				$id_herrajes[$tendidos] = array();
				$tipo_herraje[$tendidos] = array();
				$cantidad_herraje[$tendidos] = array();
				
				for($j = 1; $j <= $rows_herrajes; $j++) {
					if(isset($_POST['herraje_tipo_' . $i . '_' . $j]) && isset($_POST['herraje_cantidad_' . $i . '_' . $j])) {
						$id_herrajes[$tendidos][$herrajes[$tendidos]] = (isset($_POST['id_herraje_' . $i . '_' . $j])) ? $_POST['id_herraje_' . $i . '_' . $j] : 0;
						$tipo_herraje[$tendidos][$herrajes[$tendidos]] = $_POST['herraje_tipo_' . $i . '_' . $j];
						$cantidad_herraje[$tendidos][$herrajes[$tendidos]] = $_POST['herraje_cantidad_' . $i . '_' . $j];
						
						$herrajes[$tendidos]++;
					}
				}
				
				$tendidos++;
			}
		}
		
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sql1 = "UPDATE portada  set Nodo = ?, id_nodo =?, distancia = ?, Habilitacion = ?, Enrutado = ?, Tendido = ?, Canalizado = ?, Facti_Servicio = ?, postes = ?, retiro = ?, ducto = ?, instal_ct = ?, traslado = ? WHERE id_orden = ?";
		
		$sql2_d = "DELETE FROM diagrama_reporte WHERE id_diagrama NOT IN (" . implode(",", $id_a) . "," . implode(",", $id_b) . ") AND id_orden = ?";
		$sql2_i = "INSERT INTO diagrama_reporte (id_orden,nodo,rack,odf,hilo,conector,tipo_conector) VALUES(?, ?, ?, ?, ?, ?, ?)";
		$sql2_u = "UPDATE diagrama_reporte set rack = ?, odf = ?, hilo = ?, conector = ?, tipo_conector = ? WHERE id_orden = ?";
		
		$sql3_d = "DELETE t, h FROM tendido_reporte AS t JOIN herraje AS h ON (t.id_tendido = h.id_tendido) WHERE t.id_tendido NOT IN (" . implode(",", $id_tendido) . ") AND id_orden = ?";
		$sql3_i = "INSERT INTO tendido_reporte(id_orden,tipo_tendido,id_elemento,longitud_siguiente,latitud,longitud,secuencia_ini,secuencia_fin) VALUES(?, ?, ?, ?, ?, ?, ?, ?)";
		$sql3_u = "UPDATE tendido_reporte set tipo_tendido = ?, id_elemento = ?, longitud_siguiente = ?, latitud = ?, longitud = ?, secuencia_ini = ?, secuencia_fin = ? WHERE id_tendido = ?";
		
		$sql4_i = "INSERT INTO herraje(id_tendido,herraje_tipo,cantidad) VALUES(?, ?, ?)";
		$sql4_u = "UPDATE herraje set id_tendido = ?, herraje_tipo = ?, cantidad = ? WHERE id_herraje = ?";
				
		$ids_hilos = "";
		$ids_tendidos = "";
		
		try {
			
			$pdo->beginTransaction();
			
			$q1 = $pdo->prepare($sql1);
			$q1->execute(array($nodo,$id_nodo,$distancia,$habilitacion,$enrutado,$tendido,$canalizado,$factibilidad_servicio,$postes,$retiro_fo,$ducto,$instalacion_ct,$traslado,$id_orden));
			
			$q2_d = $pdo->prepare($sql2_d);
			$q2_d->execute(array($id_orden));
			
			for($i = 1; $i < $nodos_a; $i++) {
				if($id_a[$i] != 0) {
					$q2 = $pdo->prepare($sql2_u);
					$q2->execute(array($rack_a[$i],$odf_a[$i],$id_en_diagrama_a[$i],$conector_a[$i],$tipo_conector_a[$i],$id_a[$i]));

				}
				else {
					$q2 = $pdo->prepare($sql2_i);
					$q2->execute(array($id_orden,"A", $rack_a[$i],$odf_a[$i],$id_en_diagrama_a[$i],$conector_a[$i],$tipo_conector_a[$i]));
				}
			}
			
			for($i = 1; $i < $nodos_b; $i++) {
				if($id_b[$i] != 0) {
					$q2 = $pdo->prepare($sql2_u);
					$q2->execute(array($rack_b[$i],$odf_b[$i],$id_en_diagrama_b[$i],$conector_b[$i],$tipo_conector_b[$i],$id_b[$i]));

				}
				else {
					$q2 = $pdo->prepare($sql2_i);
					$q2->execute(array($id_orden,"B", $rack_b[$i],$odf_b[$i],$id_en_diagrama_b[$i],$conector_b[$i],$tipo_conector_b[$i]));
				}
			}
			
			
			$q3_d = $pdo->prepare($sql3_d);
			$q3_d->execute(array($id_orden));
			
			for($i = 1; $i < $tendidos; $i++) {
				if($id_tendido[$i] != 0) {
					$q3 = $pdo->prepare($sql3_u);
					$q3->execute(array($tipo[$i],$id_en_tendido[$i],$long_sig_apo[$i],$latitud_a[$i],$latitud_b[$i],$secuencia_inicial[$i],$secuencia_final[$i],$id_tendido[$i]));
				}
				else {
					$q3 = $pdo->prepare($sql3_i);
					$q3->execute(array($id_orden,$tipo[$i],$id_en_tendido[$i],$long_sig_apo[$i],$latitud_a[$i],$latitud_b[$i],$secuencia_inicial[$i],$secuencia_final[$i]));
					$id_tendido[$i] = $pdo->lastInsertId();
				}
				
				for($j = 1; $j < $herrajes[$i]; $j++) {
					
					$slq4_d = "DELETE FROM herraje WHERE id_herraje NOT IN (" . implode(",", $id_herrajes[$i]) . ") AND id_tendido = ?";
					$q4_d = $pdo->prepare($slq4_d);
					$q4_d->execute(array($id_tendido[$i]));
					
					if($id_herrajes[$i][$j] != 0) {
						$q4 = $pdo->prepare($sql4_u);
						$q4->execute(array($id_tendido[$i],$tipo_herraje[$i][$j],$cantidad_herraje[$i][$j],$id_herrajes[$i][$j]));
					}
					else {
						$q4 = $pdo->prepare($sql4_i);
						$q4->execute(array($id_tendido[$i],$tipo_herraje[$i][$j],$cantidad_herraje[$i][$j]));
						$id_herrajes[$i][$j] = $pdo->lastInsertId();
					}
				}
			}
			
			
		} catch(PDOExecption $e) { 
			$pdo->rollback();
			
			//echo "Error!: " . $e->getMessage();
			$cadena = "Error: " . $e->getMessage();
			$arch = fopen("milog.txt", "a+"); 
			fwrite($arch, "[".date("Y-m-d H:i:s.u")."] ".$cadena."\n");
			fclose($arch);
		} 
		
		Database::disconnect();
		header("Location: index.php?idOrden=".$id_orden);

    } else {
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
		
		$result_portada = $query_portada->fetch(PDO::FETCH_ASSOC);
		
		$query_tendidos =  $pdo->prepare($sql_tendidos);
		$query_tendidos->execute();
		
		$query_herrajes =  $pdo->prepare($sql_herrajes);
		$query_herrajes->execute();
		
		$query_diagramas =  $pdo->prepare($sql_diagramas);
		$query_diagramas->execute();
		
		$query_user = $pdo->prepare($sql_user);
		$query_user->execute();
		
		$query_status = $pdo->prepare($sql_status);
		$query_status->execute();
		
		$result_diagramas_a = array();
		$result_diagramas_b = array();
		$diagramas_a = $diagramas_b = 1;
		$result_query_diagramas = $query_diagramas->fetch(PDO::FETCH_ASSOC);
		
		do {
			if($result_query_diagramas['nodo'] == 'A') {
				$result_diagramas_a[] = $result_query_diagramas;
				$diagramas_a++;
			}
			else {
				$result_diagramas_b[] = $result_query_diagramas;
				$diagramas_b++;
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
		$tendidos = 0;
		$result_query_tendidos = $query_tendidos->fetch(PDO::FETCH_ASSOC);
		
		do {
			if(isset($result_herrajes[$result_query_tendidos['id_tendido']])) {
				$result_query_tendidos['herrajes'] = $result_herrajes[$result_query_tendidos['id_tendido']];
			}
			
			$result_tendidos[] = $result_query_tendidos;
			$tendidos++;
			$result_query_tendidos = $query_tendidos->fetch(PDO::FETCH_ASSOC);
			
		} while(!empty($result_query_tendidos));
		
		
		$result_user = $query_user->fetch(PDO::FETCH_ASSOC);

		$result_status = $query_status->fetch(PDO::FETCH_ASSOC);

		
		if(empty($result_status)) {
			header("Location: closedot.html");
			echo "esta vacio";
		}else{ echo ".";}
		
        Database::disconnect();
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="bootstrap-3.3.6/dist/js/bootstrap.min.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>     
	
    <link rel="stylesheet" href="bootstrap-3.3.6/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-3.3.6/dist/css/bootstrap-theme.min.css">
    
	<link   href="js/Gritter-master/css/jquery.gritter.css" rel="stylesheet">
    <script src="js/Gritter-master/js/jquery.gritter.js"></script>

	<link   href="css/mystyles.css" rel="stylesheet">
	<script src="js/myeffects.js"></script>
	<script src="js/localize.js"></script>
</head>
 
<body>

	<div class="container">
		<div class="row align-center">
			<h2><b>EDITAR ANEXO ORDEN DE TRABAJO Nº <?php echo $result_user['num_ot']; ?></b></h2>
		</div>
	</div>
	
	<div class="top-line-gray"></div>
	
    <div class="container">

		<form id="form_ot" action="update.php?idOrden=<?php echo $id_orden; ?>" method="post">	
			
			<ul class="nav nav-tabs">
				<li class="active"><a  data-toggle="tab" href="#seccion_portada">Portada</a></li>
				<li><a data-toggle="tab" href="#seccion_diagrama">Diagrama</a></li>
				<li><a data-toggle="tab" href="#seccion_tendido">Tendido</a></li>
			</ul>
			
			<div class="space"></div>
			
			<div class="tab-content" style="overflow: hidden;">
				<div id="seccion_portada" class="tab-pane fade in active">
					<div class="row space-between-rows">
						<div class="col-md-4">
							<div class="control-group">
								<label class="control-label">Nodo</label>
								<div class="controls">
									<input class="form-control" name="nodo" type="text" value="<?php echo $result_portada['Nodo']; ?>">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="control-group">
								<label class="control-label">Habilitación</label>
								<div class="controls">
									<select class="form-control" name="habilitacion"><option <?php echo ($result_portada['Habilitacion'] == 'Si') ? ' selected' : '';?>>Si</option><option <?php echo ($result_portada['Habilitacion'] == 'No') ? ' selected="selected"' : '';?>>No</option></select>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="control-group">
								<label class="control-label">Factibilidad de servicio</label>
								<div class="controls">
									<select class="form-control" name="factibilidad_servicio"><option <?php echo ($result_portada['Facti_Servicio'] == 'Si') ? ' selected="selected"' : '';?>>Si</option><option <?php echo ($result_portada['Facti_Servicio'] == 'No') ? ' selected="selected"' : '';?>>No</option></select>
								</div>
							</div>
						</div>
					</div>
				
					<div class="row space-between-rows">
						<div class="col-md-4">
							<div class="control-group">
								<label class="control-label">ID Nodo</label>
								<div class="controls">
									<input class="form-control" name="id_nodo" type="text" value="<?php echo $result_portada['id_nodo']; ?>">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="control-group">
								<label class="control-label">Tendido</label>
								<div class="controls">
									<select class="form-control" name="tendido"><option <?php echo ($result_portada['Tendido'] == 'Si') ? ' selected="selected"' : '';?>>Si</option><option <?php echo ($result_portada['Tendido'] == 'No') ? ' selected="selected"' : '';?>>No</option></select>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="control-group">
								<label class="control-label">Canalizado</label>
								<div class="controls">
									<select class="form-control" name="canalizado"><option <?php echo ($result_portada['Canalizado'] == 'Si') ? ' selected="selected"' : '';?>>Si</option><option <?php echo ($result_portada['Canalizado'] == 'No') ? ' selected="selected"' : '';?>>No</option></select>
								</div>
							</div>
						</div>
					</div>
						
					<div class="row space-between-rows">
						<div class="col-md-4">
							<div class="control-group">
								<label class="control-label">Distancia</label>
								<div class="controls">
									<input class="form-control number-value" name="distancia" type="text" value="<?php echo $result_portada['distancia']; ?>">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="control-group">
								<label class="control-label">Enrutado</label>
								<div class="controls">
									<select class="form-control" name="enrutado"><option <?php echo ($result_portada['Enrutado'] == 'Si') ? ' selected="selected"' : '';?>>Si</option><option <?php echo ($result_portada['Enrutado'] == 'No') ? ' selected="selected"' : '';?>>No</option></select>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="control-group">
								<label class="control-label">Postes</label>
								<div class="controls">
									<select class="form-control" name="postes"><option <?php echo ($result_portada['postes'] == 'Si') ? ' selected="selected"' : '';?>>Si</option><option <?php echo ($result_portada['postes'] == 'No') ? ' selected="selected"' : '';?>>No</option></select>
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
									<select class="form-control" name="retiro_fo"><option <?php echo ($result_portada['retiro'] == 'Si') ? ' selected="selected"' : '';?>>Si</option><option <?php echo ($result_portada['retiro'] == 'No') ? ' selected="selected"' : '';?>>No</option></select>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="control-group">
								<label class="control-label">Ducto</label>
								<div class="controls">
									<select class="form-control" name="ducto"><option <?php echo ($result_portada['ducto'] == 'Si') ? ' selected="selected"' : '';?>>Si</option><option <?php echo ($result_portada['ducto'] == 'No') ? ' selected="selected"' : '';?>>No</option></select>
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
									<select class="form-control" name="instalacion_ct"><option <?php echo ($result_portada['instal_ct'] == 'Si') ? ' selected="selected"' : '';?>>Si</option><option <?php echo ($result_portada['instal_ct'] == 'No') ? ' selected="selected"' : '';?>>No</option></select>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="control-group">
								<label class="control-label">Traslado</label>
								<div class="controls">
									<select class="form-control" name="traslado"><option <?php echo ($result_portada['traslado'] == 'Si') ? ' selected="selected"' : '';?>>Si</option><option <?php echo ($result_portada['traslado'] == 'No') ? ' selected="selected"' : '';?>>No</option></select>
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
						<div id="nodo_a_zone" data-rows="<?php echo $diagramas_a ?>">
							<input type='hidden' id="rows-nodo-a-input" name='data-nodo-a-rows' type='text' value="<?php echo $diagramas_a ?>">
							
							<?php
								
								$cadena = "";
								for ($i = 0; $i < $diagramas_a - 1 ; $i++) {
									
									$n_id_a = $i + 1;
									
									$button = "";
									if($i > 0) {
										$button = "<div class='col-md-offset-1 col-md-1'><a class='btn btn-danger btn-row-margin btn-delete-nodo-a-row'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a></div>";
									}
									
									$temp =	"<div class='row space-between-rows'>
													<input type='hidden' name='id_nodo_a_{$n_id_a}' value='{$result_diagramas_a[$i]['id_diagrama']}'>
													<div class='col-md-2'>
														<div class='control-group'>
															<label class='control-label'>Rack/Tarjeta</label>
															<div class='controls'>
																<input class='form-control' name='rack_a_{$n_id_a}' type='text' value={$result_diagramas_a[$i]['rack']}>
															</div>
														</div>
													</div>
													<div class='col-md-2'>
														<div class='control-group'>
															<label class='control-label'>ODF/Puerto</label>
															<div class='controls'>
																<input class='form-control' name='odf_a_{$n_id_a}' type='text' value={$result_diagramas_a[$i]['odf']}>
															</div>
														</div>
													</div>
													<div class='col-md-2'>
														<div class='control-group'>
															<label class='control-label'>Hilo/ID</label>
															<div class='controls'>
																<input class='form-control number-value' name='id_en_diagrama_a_{$n_id_a}' type='text' value={$result_diagramas_a[$i]['hilo']} >
															</div>
														</div>
													</div>
													<div class='col-md-2'>
														<div class='control-group'>
															<label class='control-label'>Conector</label>
															<div class='controls'>
																<input class='form-control number-value' name='conector_a_{$n_id_a}' type='text' value={$result_diagramas_a[$i]['conector']} >
															</div>
														</div>
													</div>
													<div class='col-md-2'>
														<div class='control-group'>
															<label class='control-label'>Tipo de conector</label>
															<div class='controls'>
																<select class='form-control' name='tipo_conector_a_{$n_id_a}'><option ";
									$temp.= ($result_diagramas_a[$i]['tipo_conector'] == 'SC') ? 'selected' : '';
									$temp.= " >SC</option><option ";
									$temp.= ($result_diagramas_a[$i]['tipo_conector'] == 'FC') ? 'selected' : '';
									$temp.= " >FC</option></select>
															</div>
														</div>
													</div>
													" . $button . "
												</div>";
												
									$cadena = $temp . $cadena;
												
								}
								
								echo $cadena;
							?>
							
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
						<div id="nodo_b_zone" data-rows="<?php echo $diagramas_b ?>">
							<input type='hidden' id="rows-nodo-b-input" name='data-nodo-b-rows' type='text' value="<?php echo $diagramas_b ?>">
							
							<?php
								
								$cadena = "";
								for ($i = 0; $i < $diagramas_b - 1 ; $i++) {
									
									$n_id_b = $i + 1; 
									
									$button = "";
									if($i > 0) {
										$button = "<div class='col-md-offset-1 col-md-1'><a class='btn btn-danger btn-row-margin btn-delete-nodo-b-row'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a></div>";
									}
									
									$temp =	"<div class='row space-between-rows'>
													<input type='hidden' name='id_nodo_b_{$n_id_b}' value='{$result_diagramas_b[$i]['id_diagrama']}'>
													<div class='col-md-2'>
														<div class='control-group'>
															<label class='control-label'>Rack/Tarjeta</label>
															<div class='controls'>
																<input class='form-control' name='rack_b_{$n_id_b}' type='text' value={$result_diagramas_b[$i]['rack']}>
															</div>
														</div>
													</div>
													<div class='col-md-2'>
														<div class='control-group'>
															<label class='control-label'>ODF/Puerto</label>
															<div class='controls'>
																<input class='form-control' name='odf_b_{$n_id_b}' type='text' value={$result_diagramas_b[$i]['odf']}>
															</div>
														</div>
													</div>
													<div class='col-md-2'>
														<div class='control-group'>
															<label class='control-label'>Hilo/ID</label>
															<div class='controls'>
																<input class='form-control number-value' name='id_en_diagrama_b_{$n_id_b}' type='text' value={$result_diagramas_b[$i]['hilo']} >
															</div>
														</div>
													</div>
													<div class='col-md-2'>
														<div class='control-group'>
															<label class='control-label'>Conector</label>
															<div class='controls'>
																<input class='form-control number-value' name='conector_b_{$n_id_b}' type='text' value={$result_diagramas_b[$i]['conector']} >
															</div>
														</div>
													</div>
													<div class='col-md-2'>
														<div class='control-group'>
															<label class='control-label'>Tipo de conector</label>
															<div class='controls'>
																<select class='form-control' name='tipo_conector_b_{$n_id_b}'><option ";
									$temp.= ($result_diagramas_b[$i]['tipo_conector'] == 'SC') ? 'selected' : '';
									$temp.= " >SC</option><option ";
									$temp.= ($result_diagramas_b[$i]['tipo_conector'] == 'FC') ? 'selected' : '';
									$temp.= " >FC</option></select>
															</div>
														</div>
													</div>
													" . $button . "
												</div>";
												
									$cadena = $temp . $cadena;
								}
								
								echo $cadena;
							?>	
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
					
					<div id="tendido_zone" data-rows="<?php echo $tendidos; ?>">
					<input type='hidden' id="rows-tendido-input" name='data-tendido-rows' type='text' value="<?php echo $tendidos; ?>">
					
					<?php
						$cadena = "";
						
						for ($i = 0; $i < $tendidos ; $i++) {
							
							$cant_herrajes = count($result_tendidos[$i]['herrajes']);
							$tend = $i + 1;
							
							$button = "";
							if($i > 0) {
								$button = "<div class='row space-between-rows'><div class='col-md-offset-11 col-md-1'><a class='btn btn-danger btn-delete-tendido-row'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a></div></div>";
							}
									
							$herrajes = "";
							for($j = 0; $j < $cant_herrajes; $j++) {
								
								$button_herraje = "";
								if($j > 0) {
									$button_herraje = "<div class='col-md-offset-1 col-md-1'><a class='btn btn-danger btn-row-margin btn-delete-herraje-row'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a></div>";
								}
								
								$herra = $j + 1;
								$temp = "<div class='row space-between-rows'>
												<input type='hidden' name='id_herraje_{$tend}_{$herra}' type='text' value='{$result_tendidos[$i]['herrajes'][$j]['id_herraje']}'>
												<div class='col-md-2'>
													<div class='control-group'>
														<label class='control-label'>Tipo</label>
														<div class='controls'>
															<select class='form-control' name='herraje_tipo_{$tend}_{$herra}' value='{$result_tendidos[$i]['herrajes'][$j]['herraje_tipo']}'><option>Cruceta</option><option>Poste nuevo</option><option>Mufa nueva</option><option>Instalacion de brazo</option><option>Preformado de remate</option><option>Realiable</option><option>Suspencion</option></select>
														</div>
													</div>
												</div>
												<div class='col-md-2'>
													<div class='control-group'>
														<label class='control-label'>Cantidad</label>
														<div class='controls'>
															<input class='form-control number-value' name='herraje_cantidad_{$tend}_{$herra}' type='text' value='{$result_tendidos[$i]['herrajes'][$j]['cantidad']}' >
														</div>
													</div>
												</div>
												" . $button_herraje . "
											</div>";
											
								$herrajes = $temp . $herrajes;
							}
							
							$temp_cadena = "<div class='tendido-row'>
							" . $button . "
							<div class='row space-between-rows'>
								<input type='hidden' name='id_tendido_{$tend}' type='text' value='{$result_tendidos[$i]['id_tendido']}'>
								<div class='col-md-2'>
									<div class='control-group'>
										<label class='control-label'>Tipo</label>
										<div class='controls'>
											<select class='form-control' name='tipo_{$tend}' value='{$result_tendidos[$i]['tipo_tendido']}'><option>Pozo</option><option>Cliente</option><option>Mufa</option><option>Poste</option><option>Caja de Reg</option></select>
										</div>
									</div>
								</div>
								<div class='col-md-2'>
									<div class='control-group'>
										<label class='control-label'>ID</label>
										<div class='controls'>
											<input class='form-control' name='id_en_tendido_{$tend}' type='text' value='{$result_tendidos[$i]['id_elemento']}' >
										</div>
									</div>
								</div>
								<div class='col-md-2'>
									<div class='control-group'>
										<label class='control-label'>Longitud apoyo</label>
										<div class='controls'>
											<input class='form-control number-value' name='long_sig_apo_{$tend}' type='text' value='{$result_tendidos[$i]['longitud_siguiente']}' >
										</div>
									</div>
								</div>
								<div class='col-md-2'>
									<div class='control-group align-center'>
										<label class='control-label'><a onclick='localize({$tend})'>Latitud</a></label>
										<div class='controls'>
											<div class='row'>
												<div class='col-md-6 padding-right-minimum'>
													<input class='form-control number-value' id='latitud_a_{$tend}' name='latitud_a_{$tend}' type='text' value='{$result_tendidos[$i]['latitud']}' >
												</div>
												<div class='col-md-6 padding-left-minimum'>
													<input class='form-control number-value' id='latitud_b_{$tend}' name='latitud_b_{$tend}' type='text' value='{$result_tendidos[$i]['longitud']}' >
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class='col-md-2'>
									<div class='control-group'>
										<label class='control-label'>Secuencia inicial</label>
										<div class='controls'>
											<input class='form-control number-value' name='secuencia_ini_{$tend}' type='text' value='{$result_tendidos[$i]['secuencia_ini']}' >
										</div>
									</div>
								</div>
								<div class='col-md-2'>
									<div class='control-group'>
										<label class='control-label'>Secuencia final</label>
										<div class='controls'>
											<input class='form-control number-value' name='secuencia_fin_{$tend}' type='text' value='{$result_tendidos[$i]['secuencia_fin']}' >
										</div>
									</div>
								</div>
							</div>
							
							<div class='row space-between-rows'>
								<div class='col-md-1'>
									<h4><b>Herraje</b></h4>
								</div>
								<div class='col-md-1'>
									<a id='new_herraje_{$tend}' class='btn btn-success' ><span class='glyphicon glyphicon-plus' aria-hidden='true'></span></a>
								</div>
							</div>
							
							<div id='herraje-zone-{$tend}' data-rows='{$cant_herrajes}'>
								<input type='hidden' id='rows-herraje-input-{$tend}' name='data-herraje-rows-{$tend}' type='text' value='{$cant_herrajes}'>
								
								{$herrajes}
								
								</div>
							</div>";
								
							$cadena = $temp_cadena . $cadena;
						}
					
					echo $cadena;
					
					?>
					</div>
				</div>
				
				
			</div>				
		</div>

			<div class="under-line-gray"></div>
			<div class="space"></div>
			
			<div class="row">
				<div class="col-md-12">
					<div class="pull-right below-under-line">
						<button type="submit" class="btn btn-success">Actualizar</button>
						<a class="btn btn-danger" href="index.php?idOrden=<?php echo $id_orden ?>">Cancelar</a>
					</div>
				</div>
			</div>
		</form>	
    </div> <!-- /container -->
  </body>
</html>