<?php

    if ($_GET['fdesde']!='' && $_GET['fhasta']!='') {

    // leer archivo de configuracion
    $config = parse_ini_file('config.ini');

    foreach($config as $key => $value) {
        define($key, $value);
    }
    
	// Connect to the MongoD with defaults which are localhost and port 27017)  
	$m = new MongoClient(host . ':' . port);
	$db = $m->reviews;
	
	$tope = 4;
	$base = $_GET['inferior'];
	$pola= $_GET['polaridad'];
	$filtro= "/".$_GET['filtro']."/i";
	
	//TODO: VERIFICAR BLOQUE DE IF
	if ( $pola==1 ) {
	    $pola='pos';
	}    
	if ( $pola==2 ) {
	    $pola='neg';
	}    
	
	if ( $pola==3 ) {
	    $pola='';
	}    
	
	//select a Collection
	$collection = $db->reviews;
	
	if($_GET['fdesde']!='') {
		session_start();
		$start=$_GET['fdesde'];
		$_SESSION["start"]= $start;
	}

	if ($_GET['fhasta']!='') {
		$end=$_GET['fhasta'];
		$_SESSION["end"]= $end;
	}
	$start= $_SESSION["start"];
	$end= $_SESSION["end"];

	$start= New Mongodate(strtotime($start));
	$end= New Mongodate(strtotime($end));

	if( $pola!='') {
		$cursorTotal = $collection->find(array('date' => array('$gte' => $start, '$lte' => $end),'polaridad' => $pola, 'review' => new MongoRegex($filtro)))->sort(array('date'=>-1));
		$total = count(iterator_to_array($cursorTotal));
		$cursor = $collection->find(array('date' => array('$gte' => $start, '$lte' => $end),'polaridad' => $pola, 'review' => new MongoRegex($filtro)))->skip($base)->limit($tope)->sort(array('date'=>-1));
	}
	else {
		$cursorTotal = $collection->find(array('date' => array('$gte' => $start, '$lte' => $end)))->sort(array('date'=>-1));
		$total = count(iterator_to_array($cursorTotal));
		$cursor = $collection->find(array('date' => array('$gte' => $start, '$lte' => $end)))->skip($base)->limit($tope)->sort(array('date'=>-1));
	}

    $num_docs = count(iterator_to_array($cursor));
    // $num_docs = 0


    if( $num_docs > 0 )
    {
    	echo '<h2 class="text-info">Opiniones</h2>';
    	echo '<h4>Total de Opiniones en el periodo: ' . count(iterator_to_array($cursor)) . '</h4>';
    	echo '<table class=table table-bordered>';    
    	echo '<tbody>';
        // loop over the results
        foreach ($cursor as $obj)
        {
	        echo '<tr>';
	        echo '<td>';
            echo 'Polaridad: ' . $obj['polaridad'] . '<br/>';       
	    echo 'fecha: ' . date('d-M-Y H:i:s', $obj['date']->sec) . '<br/>'; 
            echo '<p>Comentario: ' .'<br/>' . $obj['review'] . '</p>';
	        echo '</td>';
	        echo '</tr>';            
        }
        echo '</tbody>';
    	echo '</table>';

    	if ($base != 0){
    		$new_base = $base - $tope;
    		echo '<button id="anterior" class="btn btn-primary" onclick="enviarForm('.$new_base.')">Anterior</button>';
    	}
    	if (($num_docs == $tope) && ($base+$num_docs < $total)){
    		$new_base = $base + $num_docs;
    		echo '<button class="btn btn-primary" onclick="enviarForm('.$new_base.')">Siguiente</button>';
    	}
    }
    else
    {
        echo "No se han encontrado coincidencias\n";
    }

    $m->close();
	}

?>
