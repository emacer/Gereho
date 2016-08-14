<html>
	 <head>
	 	<meta charset="UTF-8">
	 	<link rel="stylesheet" href="css/bootstrap.min.css">
	 	<link rel="stylesheet" href="css/menu.css">
	 	<link rel="stylesheet" href="css/micss2.css">
	 	<link rel="stylesheet" href="css/footer.css">
	 	<script src="js/jquery.min.js"></script>
	 	<script src="js/bootstrap.min.js"></script>
	 	<script src="js/app.js"></script>
	 	<script src="js/webService.js"></script>
	 	<script src="js/miajax.js"></script>
	 	<script src="js/menu.js"></script>
	 	<script src="js/jquery.crypt.js"></script>
	 	
	 	<title>GEREHO</title>
	 	<link rel="shortcut icon" type="image/x-icon" href="imagen/logo-v.ico" />
	 </head>
	 <body>
		<?php
		include "menu.php";
		?>
		
		<section>
			<center>
				<h1>Gracias por Visitarnos</h1>
				<h2>Por favor dejenos su opinion</h2>
				<br>
				<textarea id="op" name="opinion" rows="10" cols="60"></textarea>
				<br><br>
				<div>Categoria</div>
				<select id="categoria" class="form-control" style="width:10%;">
					<option value="1">Solo</option>
					<option value="2">Pareja</option>
					<option value="3">Familia</option>
				</select>
				<br><br>
				<button class="btn btn-primary" onclick="enviarForm()">Enviar</button>
				<button class="btn btn-primary" onclick="corregirData()">Corregir</button>
			</center>
		</section>

		<div id="footer">
		    <div class="container">
	        	<center id="links">
	        		<h3 class="footertext">Comuniquese a traves de:</h3>
                	<a href="#">
	                	<img src="imagen/face.png" width=40 heigh=40 alt="the-brains">
	            	</a>
	            	<a href="#">
                		<img src="imagen/twitter.png" width=40 heigh=40 alt="...">
                	</a>
                	<a href="#">
                  		<img src="imagen/mail.png" width=40 heigh=40 alt="...">
                	</a>
	            	<a class="footertext" href="#">GeReHo - Copyright 2016</a>
	        	</center>
		    </div>
		</div>

		<div class="modal fade" id="myModalcla" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Gracias por dejar su opinion!</h4>
					</div>
					<div class="modal-body"></div>
				    <div class="modal-footer">
					<button class="btn btn-primary" onclick="sinCorregirOpinion()">Correcto</button>
					<button class="btn btn-primary" onclick="corregirOpinion()">Incorrecto</button>
					<a href="#" class="btn btn-default" data-dismiss="modal">Cerrar</a>
				    </div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="myModalSinCor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

						<h4 class="modal-title" id="myModalLabel">Gracias por dejar su opinion!</h4>
					</div>
					<div class="modal-body"></div>
				    <div class="modal-footer">
					<a href="#" class="btn btn-default" data-dismiss="modal">Cerrar</a>
				    </div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="myModalCor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

						<h4 class="modal-title" id="myModalLabel">Gracias por dejar su opinion!</h4>
					</div>
					<div class="modal-body"></div>
				    <div class="modal-footer">
					<a href="#" class="btn btn-default" data-dismiss="modal">Cerrar</a>
				    </div>
				</div>
			</div>
		</div>
	</body>
</html>
