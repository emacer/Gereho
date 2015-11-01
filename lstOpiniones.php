<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	 	<meta http-equiv="Access-Control-Allow-Origin" content="*">
	 	 
	 	<link rel="stylesheet" href="css/bootstrap.min.css">
	 	<link rel="stylesheet" href="css/appger.css">
	 	<link rel="stylesheet" href="css/menu.css">
		<link href="css/jquery.growl.css" rel="stylesheet" type="text/css" />	
		 	
	 	<script src="js/jquery-2.1.3.min.js"></script>
	 	<script src="js/jquery-1.7.1.min.js"></script>
	 	<script src="js/bootstrap.min.js"></script>	 	
	 	<script src="js/jquery-ui-1.8.24.min.js"></script>
	 	<script src="js/jquery.growl.js" type="text/javascript"></script>
	 	<script src="js/app.js"></script>
	 	<script src="js/webService.js"></script>
	 	<script src="js/menu.js"></script>
	 	<script src="js/jquery.crypt.js"></script>
	 	
	 	<title>GEREHO</title>        
    	<link rel="shortcut icon" type="image/x-icon" href="imagen/logo-v.ico" />
    </head>
    <body>
		<?php
		include "menu.php";
		?>    
	    <br/>
	    <br/>
<?php

	// leer archivo de configuracion
    $config = parse_ini_file('config.ini');

    foreach($config as $key => $value) {
        define($key, $value);
    }
    
	// Connect to the MongoD with defaults which are localhost and port 27017)  
	$m = new MongoClient(host . ':' . port);
	$db = $m->reviews;
	
	//select a Collection
	$collection = $db->reviews;

	if ($collection->count() == 0){
		echo "<center><img src='imagen/listaVacia.png' height='500'></img></center>";
	}
	else{
		$page  = isset($_GET['page']) ? (int) $_GET['page'] : 1;
		$limit = 5;
		$skip  = ($page - 1) * $limit;
		$next  = ($page + 1);
		$prev  = ($page - 1);
		$sort  = array('date' => -1);
		
		echo '<table class=table table-bordered>';    
		echo '<tbody>';	
		
		$cursor = $collection->find()->skip($skip)->limit($limit)->sort($sort);
		foreach ($cursor as $r) {
			echo '<tr>';
			echo '<td>';
			$p= ($r['polaridad']=='pos') ? 'Positivo': 'Negativo';
			echo 'Clasificacion: ' . $p  . '<br/>' ;
			echo 'fecha: ' . date('d-M-Y H:i:s', $r['date']->sec) . '<br/>';
			echo '<p>Comentario: '. $r['review'] . '</p>';	    
			echo '</td>';
			echo '</tr>'; 		

		}
	        echo '</tbody>';
			echo '</table>';     	
		
		$total= $cursor->count(); 
		if($page > 1){
		    echo '<a href="?page=' . $prev . '" class="btn btn-primary">Anterior</a>';
		    if($page * $limit < $total) {
		        echo ' <a href="?page=' . $next . '" class="btn btn-primary">Siguiente</a>';
		    }
		} else {
		    if($page * $limit < $total) {
		        echo ' <a href="?page=' . $next . '" class="btn btn-primary">Siguiente</a>';
		    }
		}
	}
	$m->close();
?>   
    </body>
</html>    
