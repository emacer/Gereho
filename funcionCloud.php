<?php
function cmp($a, $b) {//Ordenar los numeros descendientemente
    if ($a == $b) return 0;
    return ($a < $b) ? 1 : -1;
}

function contarPalabras(){//desde el texto
	$config = parse_ini_file('config.ini');
	foreach($config as $key => $value) {
		define($key, $value);
	}
	// Connect to the MongoD with defaults which are localhost and port 27017)  
	$m = new MongoClient(host . ':' . port);
	$db = $m->reviews;
	$collection = $db->reviews;
	$cursor = $collection->find();

	$wordCounter=array();//array para mantenerla palabra->númeroderepeticiones
	foreach ($cursor as $r) {
		$text = $r['review'];
		$text = strip_tags($text);//borrarlas etiquetasHTML
		$text = strtolower($text);//todoaminúsculas
		$text = str_replace (array('\\r\\n', '\\n', '+'), ',', $text);//sustituir alos posibles saltos de linea
		$text = str_replace (array('–','(',')',':','.','?','!','_','*','-'), '', $text);//reemplazar el carácter no es válido
		$text = str_replace (array(' ','.'), ',', $text);//sustituir por comas
		$arrText=explode(",",$text);//Crear un array con las palabras
		unset($text);
	  	foreach ($arrText as $value)  {
	    	$value=trim($value);//quitar espacios
	    	if ( strlen($value)>3 ) {//mayor que 0
	    		if (array_key_exists($value,$wordCounter)){//si la clave existe
	        		$wordCounter[$value] += 1;
	      		}
	      		else $wordCounter[$value]=1;//creando clave
	    	}
	 	}
	}
	unset($arrText);
	uasort($wordCounter,"cmp");//short from bigger to smaller
	echo "<div id='cloud'>";
	echo '<ul id="frame" class="frame">';
	foreach(array_slice($wordCounter,0, 40) as $key=>$value){
		echo '<li>'.$key.'</li>';
	}
	echo '</ul></div>';
	unset($wordCounter);
}
?>