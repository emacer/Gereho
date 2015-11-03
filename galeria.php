<html>
<head>
	<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">	
	 	<link rel="stylesheet" href="css/menu.css">
	 	<link rel="stylesheet" type="text/css" href="css/jimgMenukwicks.css">
	 	<link rel="stylesheet" href="css/zoomwall.css">
	 	<link rel="stylesheet" href="css/galeria.css">
	
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
	<?php 
		include "menu.php";
		include "funcionesGaleria.php";
		$porcentaje = categorias();
	?>	
	
	<center>
		<section>
			<div id="tableCategoria">
				<table>
					<th>Categoria</th>
					<th id="pos" colspan="2">Positivo</th>
					<th id="neg" colspan="2">Negativo</th>
			  		<tr>
				    	<td>Solo</td>
				    	<td><img id="logo" src="imagen/pos.png"></td> 
				    	<td><?=number_format($porcentaje[0],2);?>%</td>
				    	<td><img id="logo" src="imagen/neg.png"></td> 
				    	<td><?=number_format($porcentaje[1],2);?>%</td>
				  	</tr>
				  	<tr>
				    	<td>Pareja</td>
				    	<td><img id="logo" src="imagen/pos.png"></td> 
				    	<td><?=number_format($porcentaje[2],2);?>%</td>
				    	<td><img id="logo" src="imagen/neg.png"></td> 
				    	<td><?=number_format($porcentaje[3],2);?>%</td>
				  	</tr>
				  	<tr>
				    	<td>Familia</td>
				    	<td><img id="logo" src="imagen/pos.png"></td> 
				    	<td><?=number_format($porcentaje[4],2);?>%</td>
				    	<td><img id="logo" src="imagen/neg.png"></td>
				    	<td><?=number_format($porcentaje[5],2);?>%</td>
				  	</tr>
				</table>
			</div>
			<div id="menuImagen" class="jimgMenu">
				<ul>
					<li id="hotel"><a href="javascript:pedirGaleria('galeria1.php');">Hoteles</a></li>
					<li id="interior"><a href="javascript:pedirGaleria('galeria2.php');">Interior</a></li>
					<li id="paisajes"><a href="javascript:pedirGaleria('galeria3.php');">Paisajes</a></li>
					<li id="excursiones"><a href="javascript:pedirGaleria('galeria4.php');">Excursiones</a></li>
					<li id="urban"><a href="#">Urban</a></li>
				</ul>
			</div>
		</section>
		<section class="col-md-12">
			<div id="zoomwall" class="zoomwall">
				<script>
					pedirGaleria('galeria1.php');
				</script>
			</div>
		</section>
	</center>
	</body>
</html>