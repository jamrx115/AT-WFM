<?php
    require 'database.php';
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( null==$id ) {
        header("Location: index.php");
    } else {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM portada where id_portada = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        Database::disconnect();
    }
?>
 
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
 
<body>
    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Leer portada</h3>
                    </div>
                     
                    <div class="form-horizontal" >
                      <div class="control-group">
                        <label class="control-label">No. Instalación</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['id_orden'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Nodo</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['Nodo'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">ID Nodo</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['id_nodo'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Distancia</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['distancia'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Habilitación</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['Habilitacion'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Enrutado</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['Enrutado'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Tendido</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['Tendido'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Canalizado</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['Canalizado'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Factibilidad de servicio</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['Facti_Servicio'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Postes</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['postes'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Retiro F.O.</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['retiro'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Ducto</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['ducto'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Instalación C.T.</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['instal_ct'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Traslado</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['traslado'];?>
                            </label>
                        </div>
                      </div>
                        <div class="form-actions">
                          <a class="btn" href="index.php">Back</a>
                       </div>
                     
                      
                    </div>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>


                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>