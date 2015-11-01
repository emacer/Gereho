<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/jquery-theme.min.css">
	<link rel="stylesheet" href="css/jquery-ui.structure.min.css">
	<link rel="stylesheet" href="css/micss3.css">
	<link rel="stylesheet" href="css/menu.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/mijs.js"></script>
	<script src="js/menu.js"></script>
	<script src="js/jquery.crypt.js"></script>
	
	<title>GEREHO</title>        
    <link rel="shortcut icon" type="image/x-icon" href="imagen/logo-v.ico" />
</head>
<body>
	<?php include "menu.php";?>
	<section>
		<center>
			<h1>Reservaciones</h1>
			<br>
			<table>
				<tr>
					<td><label>Nombre</label></td>
					<td><input type="text" placeholder="Francisco" class="placeholder-fix"></td>
				</tr>
				<tr>
					<td><label>Apellido</label></td>
					<td><input type="text" placeholder="Bergoglio" class="placeholder-fix"></td>
				</tr>
				<tr>
					<td><label>Email</label></td>
					<td><input type="email" placeholder="bergolio@gmail.com" class="placeholder-fix"></td>
				</tr>
				<tr>
					<td><label>Telefono</label></td>
					<td><input type="text" placeholder="0280154594218" class="placeholder-fix"></td>
				</tr>
				<tr>
					<td><label>Cant Personas</label></td>
					<td><input type="text" placeholder="2" class="placeholder-fix"></td>
				</tr>
				<tr>
					<td><label>Fecha</label></td>
					<td><input type="text" id="datepicker" placeholder="13/07/2015" class="placeholder-fix"></td>
				</tr>
				<tr>
					<td><label>Comentarios</label></td>
					<td><textarea rows="3"></textarea></td>
				</tr>
			</table>
			<br>
			<button class="btn btn-primary" onclick="reservar()">Enviar</button>
		</center>
	</section>
</body>
</html>