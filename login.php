<?php
	session_start();
?>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$user = $_POST["usuario"];
		$pwd = $_POST["pass"];

		// leer archivo de configuracion
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

		//realizo la consulta
		$sql = 'SELECT * FROM usuarios WHERE user="'.$user.'" AND password="'.$pwd.'"';
		$result = $conn->query($sql);

		if ($result->num_rows > 0){
			$_SESSION["logueado"]=1;
			header("Location: inicio.php");
		} else {
		    echo "Datos Incorrectos";
		}
		$conn->close();
	?>
</body>
</html>