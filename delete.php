<?php
	// require 'database.php';
	$id = 0;

	if ( !empty($_GET['id'])) {
	$id = $_REQUEST['id'];
	}

	 
	// delete data
	//leer archivo de configuracion
	$config = parse_ini_file('config.ini');

	foreach($config as $key => $value) {
	    define($key, $value);
	}
	//conexion a la base de datos
	$conn=mysqli_connect(hostMysql,userMysql,pwdMysql,baseMysql);

	// Chequeo la conexion
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 


	$conn->query("DELETE FROM reservas WHERE id=$id");


	$conn->close();
	header("Location: listarReservas.php");
         

?>
 

