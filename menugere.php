<?php
if (isset($_GET["salir"])){
	session_start();
	session_unset();
	session_destroy();
	header("Location: index.php");
}
?>

<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="menugere.php?salir=1">GEREHO<img height="80" width="100" src="imagen/logo3.jpg" alt=""/></a>				
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      	</button>
			<a class="navbar-brand" href="inicio.php"><span class="glyphicon glyphicon-home"></span>Inicio</a>
		</div>

		<div class="collapse navbar-collapse" id="barra-collapse">
			<ul id="super_nav_bar" class="nav navbar-nav">
				<li><a href="estadisticas.php">Estadisticas</a></li>
				<li><a href="conOpiniones.php">Opiniones</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li id="btn_nosotros" class=""><a href="aboutgere.php">Nosotros</a></li>
				<li id="btn_desloguear" class=""><a href="menugere.php?salir=1">Salir</a></li>
			</ul>
		</div>
	</div>
</nav>