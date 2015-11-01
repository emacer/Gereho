<?php
	session_start();
	if (! isset($_SESSION["logueado"]))
		header("Location: index.php");	
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	 	 <meta http-equiv="Access-Control-Allow-Origin" content="*">
	 	 
	 	<link rel="stylesheet" href="css/bootstrap.min.css">
        <link type="text/css" href="css/DatePicker.css" rel="stylesheet" />	 	
	    <link type="text/css" href="css/jquery-ui.css" rel="stylesheet"  />
	 	<link rel="stylesheet" href="css/appger.css">
		<link rel="stylesheet" type="text/css" href="css/jquery.ui.theme.css" />
		<link rel="stylesheet" type="text/css" href="css/jquery.ui.theme.font-awesome.css" />	 	
		<link type="text/css" href="css/bootstrap-timepicker.min.css" rel="stylesheet"/>	 
		<link href="css/jquery.growl.css" rel="stylesheet" type="text/css" />				
		 	
	 	<script src="js/jquery-2.1.3.min.js"></script>
	 	<script src="js/jquery-1.7.1.min.js"></script>
	 	<script src="js/bootstrap.min.js"></script>	 	
	 	<script src="js/jquery-ui-1.8.24.min.js"></script>
	 	<script src="js/date-picker.js"></script>
	 	<script type="text/javascript"  src="js/jquery.ui.datepicker-es.js"></script>
	 	<script src="js/estadisticas.js"></script>
	 	<script src="js/jquery.growl.js" type="text/javascript"></script>
	 		 	
	 	<title>GEREHO</title>        
    	<link rel="shortcut icon" type="image/x-icon" href="imagen/logo-v.ico" />
    </head>
    <body>
		<?php
		include "menugere.php";
		?>     
    <br/>
    <br/>

<div class="container">

    <div class="row vertical-align">
		<div class="col-xs-6 col-md-5">
            <span class="visible-lg"><a href="#"><img src="imagen/sts2.jpg"></a></span>
            <h2 class="text-info">Estadisticas</h2>
        </div>

		<div class="form-group">
			<div class="col-xs-6 col-md-6">
				<h2>Periodo</h2>
			</div>		
		
			<div class="col-xs-6 col-md-3">
				<div class="form-group">
						<label class="control-label" for="date_deb">Desde</label>			
	            		<div class="input-group date form_datetime">
	                		<input type='text' class="form-control" name="fdesde" id="fdesde" /> <span class="input-group-addon">
	                		<span class="glyphicon glyphicon-calendar"></span> </span>
	            		</div>
	        	</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="form-group">
						<label class="control-label" for="date_deb">Hasta</label>			
	            		<div class="input-group date form_datetime">
	                		<input type='text' class="form-control" name="fhasta" id="fhasta"/> <span class="input-group-addon">
	                		<span class="glyphicon glyphicon-calendar"></span> </span>
	            		</div>
	        	</div>
			</div>
		</div>
		<div class="col-xs-6 col-md-3">		
	        <button class="btn btn-primary" onclick="enviarForm()">Buscar</button>
		</div>	  		

		<div class="col-xs-6 col-md-12">
			<div class="form-group">
				<div id="output">
				</div>			
			</div>			
		</div>
     </div>
</div>
    
    </body>
</html>    