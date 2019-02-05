<?php
     
    require 'database.php';
	

 
 if ( !empty($_POST)) {

		//Datos Portada
        $id_orden = $_GET['idOrden'];
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
		
		$nodos_b = 1;
		$tipo_conector_b = array();;
		$id_en_diagrama_b = array();;
		$conector_b = array();;
		$rack_b = array();
		$odf_b = array();
		
		$rows_nodos_a = $_POST['data-nodo-a-rows'];
		$rows_nodos_b = $_POST['data-nodo-b-rows'];
		
		for($i = 1; $i <= $rows_nodos_a; $i++) {
			if (isset($_POST['rack_a_' . $i]) && isset($_POST['odf_a_' . $i]) && isset($_POST['id_en_diagrama_a_' . $i]) && isset($_POST['conector_a_' . $i]) && isset($_POST['tipo_conector_a_' . $i])) {
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
				$tipo[$tendidos] = $_POST['tipo_' . $i];
				$id_en_tendido[$tendidos] = $_POST['id_en_tendido_' . $i];
				$long_sig_apo[$tendidos] = $_POST['long_sig_apo_' . $i];
				$latitud_a[$tendidos] = $_POST['latitud_a_' . $i];
				$latitud_b[$tendidos] = $_POST['latitud_b_' . $i];
				$secuencia_inicial[$tendidos] = $_POST['secuencia_ini_' . $i];
				$secuencia_final[$tendidos] = $_POST['secuencia_fin_' . $i];
				
				$rows_herrajes = $_POST['data-herraje-rows-' . $i];
				$herrajes[$tendidos] = 1;
				$tipo_herraje[$tendidos] = array();
				$cantidad_herraje[$tendidos] = array();
				
				for($j = 1; $j <= $rows_herrajes; $j++) {
					if(isset($_POST['herraje_tipo_' . $i . '_' . $j]) && isset($_POST['herraje_cantidad_' . $i . '_' . $j])) {
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
		
		$sql1 = "INSERT INTO portada (id_orden,Nodo,id_nodo,distancia,Habilitacion,Enrutado,Tendido,Canalizado,Facti_Servicio,Postes,retiro,ducto,instal_ct,traslado) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$sql2 = "INSERT INTO diagrama_reporte (id_orden,nodo,rack,odf,hilo,conector,tipo_conector) VALUES(?, ?, ?, ?, ?, ?, ?)";
		$sql3 = "INSERT INTO tendido_reporte(id_orden,tipo_tendido,id_elemento,longitud_siguiente,latitud,longitud,secuencia_ini,secuencia_fin) VALUES(?, ?, ?, ?, ?, ?, ?, ?)";
		$sql4 = "INSERT INTO herraje(id_tendido,herraje_tipo,cantidad) VALUES(?, ?, ?)";

		try {
			
			$pdo->beginTransaction();
			
			$q1 = $pdo->prepare($sql1);
			$q1->execute(array($id_orden,$nodo,$id_nodo,$distancia,$habilitacion,$enrutado,$tendido,$canalizado,$factibilidad_servicio,$postes,$retiro_fo,$ducto,$instalacion_ct,$traslado));
			
			for($i = 1; $i < $nodos_a; $i++) {
				$q2 = $pdo->prepare($sql2);
				$q2->execute(array($id_orden,"A", $rack_a[$i],$odf_a[$i],$id_en_diagrama_a[$i],$conector_a[$i],$tipo_conector_a[$i]));
			}
			
			for($i = 1; $i < $nodos_b; $i++) {
				$q2 = $pdo->prepare($sql2);
				$q2->execute(array($id_orden,"B", $rack_b[$i],$odf_b[$i],$id_en_diagrama_b[$i],$conector_b[$i],$tipo_conector_b[$i]));
			}
								
			for ($i = 1; $i < $tendidos; $i++) {
				$q3 = $pdo->prepare($sql3);
				$q3->execute(array($id_orden,$tipo[$i],$id_en_tendido[$i],$long_sig_apo[$i],$latitud_a[$i],$latitud_b[$i],$secuencia_inicial[$i],$secuencia_final[$i]));
				$id_tendido = $pdo->lastInsertId();
				
				for($j = 1; $j < $herrajes[$i]; $j++) {
					$q4 = $pdo->prepare($sql4);
					$q4->execute(array($id_tendido,$tipo_herraje[$i][$j],$cantidad_herraje[$i][$j]));
				}
			}
			
		
		} catch(PDOExecption $e) { 
			$pdo->rollback();
			
			echo "Error!: " . $e->getMessage();
			$cadena = "Error: " . $e->getMessage();
			$arch = fopen("milog.txt", "a+"); 
			fwrite($arch, "[".date("Y-m-d H:i:s.u")."] ".$cadena."\n");
			fclose($arch);
		} 
		
		Database::disconnect();
		header("Location: index.php?idOrden=".$id_orden);
    }
?>