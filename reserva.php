<?php
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

	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];
	$cantidad = $_POST['cantidad'];
	$fdesde = $_POST['fdesde'];
	$fhasta = $_POST['fhasta'];
	$comentario = $_POST['comentario'];

	//realizo la consulta
	$sql = "INSERT INTO reservas (apellido,nombre,email,telefono,cantPersonas,fdesde,fhasta,comentario)"
			."VALUES('".$apellido."','".$nombre."','".$email."','".$telefono."',".$cantidad.",'".$fdesde
			."','".$fhasta."','".$comentario."');";
	
	if ($conn->query($sql) === TRUE) {
	    $respuesta =  "Se inserto correctamente";
	} else {
	    $respuesta = "Error al insertar en la Base de Datos";
	}
	$conn->close();
	echo $respuesta;
?>