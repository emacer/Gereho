<?php
    // leer archivo de configuracion
    $config = parse_ini_file('config.ini');

    foreach($config as $key => $value) {
        define($key, $value);
    }
    
	//Conexion con la base de datos
	$m = new MongoClient(host . ':' . port);
	$db = $m->reviews;
	
	//seleccion de la coleccion
	$collection = $db->reviews;
	// parametros
	$start = $_GET['fdesde'];
	$end= $_GET['fhasta'];
	$start= New Mongodate(strtotime($start));
	$end= New Mongodate(strtotime($end));
		
	$cursor = $collection->find(array('date' => array('$gte' => $start, '$lte' => $end)));	
	$cursorp = $collection->find(array('date' => array('$gte' => $start, '$lte' => $end),'polaridad' => "pos"));
	$cursorn = $collection->find(array('date' => array('$gte' => $start, '$lte' => $end),'polaridad' => "neg"));
    $cursorfp = $collection->find(array('date' => array('$gte' => $start, '$lte' => $end),'polaridad' => "neg", 'modificado' => 1));
    $cursorfn = $collection->find(array('date' => array('$gte' => $start, '$lte' => $end),'polaridad' => "pos", 'modificado' => 1));
	
	$num_docs = $cursor->count();

    if( $num_docs > 0 )
    {
    	echo '<table class=table table-bordered>';    
    	echo '<thead>';
    	echo '<tr><th>Positivos</th><th>Negativos</th><th>Total Opiniones</th>';
    	echo '</thead>';
    	echo '<tbody>';
    	echo '<tr><td>'. $cursorp->count() .'</td><td>' . $cursorn->count() .'</td><td>' . $cursor->count() . '</td></tr>';
        echo '</tbody>';
        echo '</table>';
        echo '<center><img src="torta3D.php?grafico=1&pos='.$cursorp->count().'&neg='.$cursorn->count(). 
             '&lab1=Total Positivos&lab2=Total Negativos" with="250" height="250"/></center>';
        echo '<br><br>';


        echo '<table class=table table-bordered>';    
        echo '<thead>';
        echo '<tr><th>Falsos Negativos</th><th>Total Positivas</th>';
        echo '</thead>';
        echo '<tbody>';
        echo '<tr><td>'. $cursorfn->count() .'</td><td>' . $cursorp->count() . '</td></tr>';
        echo '</tbody>';
        echo '</table>';
        if ( $cursorfn->count() > 0){
            echo '<center><img src="torta3D.php?grafico=1&pos='.$cursorfn->count().'&neg='.($cursorp->count()).
                 '&lab1=Falsos Negativos&lab2=Total Positivos" with="250" height="250"/></center>';
        }
        echo '<br><br>';


        echo '<table class=table table-bordered>';    
        echo '<thead>';
        echo '<tr><th>Falsos Positivos</th><th>Total Negativas</th>';
        echo '</thead>';
        echo '<tbody>';
        echo '<tr><td>'. $cursorfp->count() .'</td><td>' . $cursorn->count() . '</td></tr>';
        echo '</tbody>';
        echo '</table>';
        if ( $cursorfp->count() > 0){
            echo '<center><img src="torta3D.php?grafico=0&pos='.$cursorfp->count().'&neg='.($cursorn->count()).
                 '&lab1=Falsos Positivos&lab2=Total Negativas" with="250" height="250"/></center>';
        }
    }
    else
    {
        echo 'No se registran opiniones en el intervalo de tiempo seleccionado';
    }
    $m->close();
?>
