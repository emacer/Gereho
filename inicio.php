<?php
	session_start();
	if (! isset($_SESSION["logueado"]))
		header("Location: index.php");
?>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/appger.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	<title>GEREHO</title>        
    <link rel="shortcut icon" type="image/x-icon" href="imagen/logo-v.ico" />
</head>
<body>
	<?php
	include "menugere.php";
	?>  
	<br/>
	<br/>						
	<center>
		<div>
			<h1 class="titulo">Cadenas Hoteleras Springfield</h1>
		</div>

	</center>

	<div class="container">
	    <div class="row vertical-align">
			<div class="col-xs-6 col-md-6">
	            <center>
	            	<span class="visible-lg"><a href="estadisticas.php"><img src="imagen/bussines.jpg"></a></span>
	            	<a href="estadisticas.php"><h2 class="text-info">Estadisticas</h2></a>
	            </center>
	        </div>
	        
			<div class="col-xs-6 col-md-6">
	            <center>
		            <span class="visible-lg"><a href="conOpiniones.php"><img src="imagen/bussines3.jpg"></a></span>
		            <a href="conOpiniones.php"><h2 class="text-info">Opiniones</h2></a>
	            </center>
	        </div>
		</div>


		<div>
			<br/><br/><br/><br/><br/>
			<div align="center">								
				<img alt="copyright" width="20" height="20" src="imagen/cpy.jpg"/><img alt="copyright" src="imagen/do.png"/><br/>
				<strong>Reputacion On line</strong>
			</div>			
		</div>        
	</div>        	
</body>
</html>