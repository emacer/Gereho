<?php
function categorias(){
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

	$total = $collection->find()->count();
	$posSolo = $collection->find(array('polaridad' => 'pos', 'categoria' => '1'))->count();
	$posPareja = $collection->find(array('polaridad' => 'pos', 'categoria' => '2'))->count();
	$posFamilia = $collection->find(array('polaridad' => 'pos', 'categoria' => '3'))->count();
	$negSolo = $collection->find(array('polaridad' => 'neg', 'categoria' => '1'))->count();
	$negPareja = $collection->find(array('polaridad' => 'neg', 'categoria' => '2'))->count();
	$negFamilia = $collection->find(array('polaridad' => 'neg', 'categoria' => '3'))->count();
	
	$categorias = array();
	if ($total){
		array_push($categorias, ($posSolo * 100) / (float)$total);
		array_push($categorias, ($posPareja * 100) / (float)$total);
		array_push($categorias, ($posFamilia * 100) / (float)$total);
		array_push($categorias, ($negSolo * 100) / (float)$total);
		array_push($categorias, ($negPareja * 100) / (float)$total);
		array_push($categorias, ($negFamilia * 100) / (float)$total);
	}else{
		array_push($categorias, 0);
		array_push($categorias, 0);
		array_push($categorias, 0);
		array_push($categorias, 0);
		array_push($categorias, 0);
		array_push($categorias, 0);
	}
	return $categorias;
}
?>
