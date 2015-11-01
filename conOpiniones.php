<?php
	session_start();
	if (! isset($_SESSION["logueado"]))
		header("Location: index.php");
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	 	<meta http-equiv="Access-Control-Allow-Origin" content="*">
	 	 
	 	<link rel="stylesheet" href="css/normalize.css">  	
	  	<link rel="stylesheet" href="css/BubbleCloud3D.css">
	 	<link rel="stylesheet" href="css/bootstrap.min.css">
        <link type="text/css" href="css/DatePicker.css" rel="stylesheet" />	 	
	    <link type="text/css" href="css/jquery-ui.css" rel="stylesheet"  />
	 	<link rel="stylesheet" href="css/appger.css">
	 	<link rel="stylesheet" href="css/conOpiniones.css">
		<link rel="stylesheet" type="text/css" href="css/jquery.ui.theme.css" />
		<link rel="stylesheet" type="text/css" href="css/jquery.ui.theme.font-awesome.css" />	 	
		<link type="text/css" href="css/bootstrap-timepicker.min.css" rel="stylesheet"/>	 
		<link href="css/jquery.growl.css" rel="stylesheet" type="text/css" />	
		

	  	<script src="js/js/vendor/modernizr-2.8.3.min.js"></script>
	  	<script src="js/js/vendor/hammer.js"></script>
	 	<script src="js/jquery-2.1.3.min.js"></script>
	 	<script src="js/jquery-1.7.1.min.js"></script>
	 	<script src="js/bootstrap.min.js"></script>	 	
	 	<script src="js/jquery-ui-1.8.24.min.js"></script>
	 	<script src="js/date-picker.js"></script>
	 	<script type="text/javascript"  src="js/jquery.ui.datepicker-es.js"></script>
	 	<script src="js/conopiniones.js"></script>
	 	<script src="js/jquery.growl.js" type="text/javascript"></script>
	 	
	 	<title>GEREHO</title>        
    	<link rel="shortcut icon" type="image/x-icon" href="imagen/logo-v.ico"/>
    </head>
		<?php
		include "menugere.php";
		include "funcionCloud.php";
		?>    
    <body>
    	<br/>
    	<br/>
    	<?php
    	contarPalabras();
		?>
		<script src="js/js/plugins.js"></script>
		<script src="js/js/BubbleCloud3D.js"></script>
		<script type="text/javascript">
			$(function(){
				$(".frame").to3DBubbleCloud();
			});
		</script>

		<div class="container">
			<div class="row">
				<div class="col-md-3">
		            <span class="visible-lg"><a href="#"><img src="imagen/rv4.jpg"></a></span>
		        </div>

				<div class="form-group">
					<div class="col-md-5">
						<h2>Periodo</h2>
					</div>		
					<div class="col-md-2">
						<div class="form-group">
							<label class="control-label" for="date_deb">Desde</label>			
		            		<div class="input-group date form_datetime">
		                		<input type='text' class="form-control" name="fdesde" id="fdesde" /> <span class="input-group-addon">
		                		<span class="glyphicon glyphicon-calendar"></span> </span>
		            		</div>
			        	</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label class="control-label" for="date_deb">Hasta</label>			
		            		<div class="input-group date form_datetime">
		                		<input type='text' class="form-control" name="fhasta" id="fhasta"/> <span class="input-group-addon">
		                		<span class="glyphicon glyphicon-calendar"></span> </span>
		            		</div>
			        	</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label class="control-label" for="date_deb">Filtrar</label>			
							<div class="input-group form_datetime">
								<select id="filter" class="form-control">
									<option value=" ">Todo</option>
									<option value="habitaci">Habitacion</option>
									<option value="restauran">Restaurante</option>
									<option value="atenci">Atención</option>
								</select>
							</div>
			        	</div>
					</div>
				</div>
				<div>
					<div class="row">
						<div class="col-md-2">
							<label>
								<input type="checkbox" value="" id="chkpos" name="chkpos">
								Positivos
							</label>
						</div>		
						<div class="col-md-2">		
							  <label>
							    <input type="checkbox" value="" id="chkneg" name="chkneg">
							    Negativos
							  </label>
						</div>		
						<div class="col-md-1">		
					        <button class="btn btn-primary" onclick="enviarForm()">Buscar</button>
						</div>	  			
					</div>
						
					<div class="col-md-12">
						<div class="form-group">
							<div id="output"></div>			
						</div>			
					</div>
			    </div>
			</div>
    </body>
</html>    