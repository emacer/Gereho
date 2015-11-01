<html>
	 <head>
	 	<meta charset="UTF-8">
	 	<link rel="stylesheet" href="css/bootstrap.min.css">
	 	<link rel="stylesheet" href="css/micss2.css">
	 	<link rel="stylesheet" href="css/menu.css">
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
				<br><br><br>
				<button class="btn btn-primary" onclick="enviarForm()">Enviar</button>
				<button class="btn btn-primary" onclick="corregirData()">Corregir</button>
			</center>
		</section>

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
