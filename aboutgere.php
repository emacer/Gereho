<?php
	session_start();
	if (! isset($_SESSION["logueado"]))
		header("Location: inicio.php");	
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	 	<meta http-equiv="Access-Control-Allow-Origin" content="*">
	 	 
	 	<link rel="stylesheet" href="css/bootstrap.min.css">
        <link type="text/css" href="css/DatePicker.css" rel="stylesheet" />	 	
	    <link type="text/css" href="css/jquery-ui.css" rel="stylesheet"  />
	 	<link rel="stylesheet" href="css/appger.css">
	 	<link rel="stylesheet" href="css/conOpiniones.css">
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
	 	<script src="js/conopiniones.js"></script>
	 	<script src="js/jquery.growl.js" type="text/javascript"></script>
	 	
	 	<title>GEREHO</title>        
    	<link rel="shortcut icon" type="image/x-icon" href="imagen/logo-v.ico"/>
    </head>
    <body>
	<?php include "menugere.php";?>
    <br/>
    <br/>

<div class="container">

    <div class="row vertical-align">
		<div class="col-xs-6 col-md-5">
            <span class="visible-lg"><a href="#"><img src="imagen/sentiment-analysis.jpg" width="300" height="400"></a></span>

        </div>

		<div class="form-group">
			<div class="col-xs-6 col-md-6">
				<h2 class="text-primary">Quienes somos</h2>
			</div>		
		
			<div class="col-xs-6 col-md-3">
			<h3 class="text-warning">GEREHO</h3> es una herramienta de reputacion on line para hoteles.
			<br/>
			- Utilizamos las opiniones on line para mejorar la reputacion
			<br/>
			- Identifica comentarios positivos y negativos relacionados con la experiencia del huésped para ayudar a priorizar mejoras operacionales y de servicio.
			<br/>
			<br/>
			
			<strong>Mejorar la reputacion en la web significa tener una ventaja contra la competencia</strong>
			<br/>
			<br/>
			<h3 class="text-warning">D&O</h3>es nuestra empresa.
			<br/>
				<address>
				contacto <img src="imagen/mail.png" width="20" height="20"> <a href="mailto:webmaster@example.com">aqui</a>.<br> 
				Telefono: 054-280-4496066<br>
				www.d&o.com<br>
				P.U, Rawson - - 43°19′00″S - 65°02′00″O<br>
				AR
				</address>			
			</div>

		</div>
     </div>
</div>
    
    </body>
</html>    
