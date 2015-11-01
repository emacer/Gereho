<html>
<head>
	<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">	
	 	<link rel="stylesheet" href="css/menu.css">
	 	<link rel="stylesheet" type="text/css" href="css/jimgMenukwicks.css">
	 	<link rel="stylesheet" href="css/zoomwall.css">
	
	 	<script src="js/jquery-1.7.1.min.js"></script>
		<script src="js/jquery-easing-1.3.pack.js"></script>
		<script src="js/jquery.zaccordion.js"></script>
		<script src="js/bootstrap.min.js"></script>		
		<script src="js/menu.js"></script>
		<script src="js/jquery.crypt.js"></script>
		<script src="js/menujs.js"></script>
		<script src="js/jquery.kwicks-1.5.1.pack.js"></script>
		<script src="js/galeria.js"></script>
		<script src="js/zoomwall.js"></script>

		<title>GEREHO</title>        
    	<link rel="shortcut icon" type="image/x-icon" href="imagen/logo-v.ico" />

	</head>
	<body>
	<?php include "menu.php" ?>	
	
	<center>
		<section>
			<div class="jimgMenu">
				<ul>
					<li id="landscapes"><a href="javascript:pedirGaleria('galeria1.php');">Hoteles</a></li>
					<li id="people"><a href="javascript:pedirGaleria('galeria2.php');">Interior</a></li>
					<li id="nature"><a href="javascript:pedirGaleria('galeria3.php');">Paisajes</a></li>
					<li id="abstract"><a href="#">Abstract</a></li>
					<li id="urban"><a href="#">Urban</a></li>
				</ul>
			</div>
		</section>
		<br><br><br>
		<section>
			<div id="zoomwall" class="zoomwall">
				<script>
					pedirGaleria('galeria1.php');
				</script>
			</div>
		</section>
	</center>
	</body>
</html>