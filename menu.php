<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.php">GEREHO<img height="60" width="60" src="imagen/logo3.jpg" alt=""/></a>		
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      	</button>
			<a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"></span>Inicio</a>
		</div>

		<div class="collapse navbar-collapse" id="barra-collapse">
			<ul id="super_nav_bar" class="nav navbar-nav">
				<li><a href="galeria.php">Galeria</a></li>
				<li><a href="reservaciones.php">Reserva</a></li>
				<li><a href="lstOpiniones.php">Comentarios</a></li>
				<li><a href="opinion.php">Tu Opinion</a></li>				
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li id="btn_nosotros" class=""><a href="#">Nosotros</a></li>
				<li id="btn_login" class=""><a href="#">Login</a></li>
			</ul>
		</div>
	</div>
</nav>

<div id="login">
	<form action="login.php" method="POST" name="formularioLogin">
		<label>Usuario:</label><br>
		<input type="text" id="usuario" name="usuario" placeholder="Usuario"><br>
		<label>Password</label><br>
		<input type="password" id="pass" name="pass" placeholder="Password"><br>
	</form>
	<button class="btn" onclick="encriptarForm()">Enviar</button>
</div>