<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/jquery-theme.min.css">
	<link rel="stylesheet" href="css/jquery-ui.structure.min.css">
	<link rel="stylesheet" href="css/micss3.css">
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/utiles.css">
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
		</center>
		
		<br>
		<table>
			<tr>
				<td><label>Nombre</label></td>
				<td><input type="text" id="nombre" placeholder="Francisco" class="placeholder-fix"></td>
			</tr>
			<tr>
				<td><label>Apellido</label></td>
				<td><input type="text" id="apellido" placeholder="Bergoglio" class="placeholder-fix"></td>
			</tr>
			<tr>
				<td><label>Email</label></td>
				<td><input type="email" id="email" placeholder="bergolio@gmail.com" class="placeholder-fix"></td>
			</tr>
			<tr>
				<td><label>Telefono</label></td>
				<td><input type="text" id="telefono" placeholder="0280154594218" class="placeholder-fix"></td>
			</tr>
			<tr>
				<td><label>Cant Personas</label></td>
				<td><input type="text" id="cantidad" placeholder="2" class="placeholder-fix"></td>
			</tr>
			<tr>
				<td><label>Fecha Desde</label></td>
				<td><input type="text" id="dateDesde" placeholder="13/07/2015" class="placeholder-fix"></td>
			</tr>
			<tr>
				<td><label>Fecha Hasta</label></td>
				<td><input type="text" id="dateHasta" placeholder="20/07/2015" class="placeholder-fix"></td>
			</tr>
			<tr>
				<td><label>Comentarios</label></td>
				<td><textarea rows="3" id="comentario"></textarea></td>
			</tr>
		</table>
		<br>

		<center>
			<button class="btn btn-primary" onclick="reservar()">Enviar</button>
		</center>

		<div id="ubicacion">
	      	<table border="1" width="30%" class="imagetable" >
				<tr>
					<th>
						<div align="center">
							<h4><strong>Ubicacion</strong></h4>
						</div>
					</th>
				</tr>
				<tr>
					<td>
						<div>Encuentre el hotel</div>
						<div>
							<a href="https://www.google.com.ar/maps/@-43.3201965,-65.0493716,16z" target="_blank"><img src="imagen/ubicacion.jpg"></a>
					    </div>
					</td>
				</tr>
		    </table>
		</div>
	</section>
</body>
</html>