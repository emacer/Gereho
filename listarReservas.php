<?php
	session_start();
	if (! isset($_SESSION["logueado"]))
		header("Location: index.php");	
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	 	 
	 	<link rel="stylesheet" href="css/bootstrap.min.css">		 	
	 	<script src="js/jquery-1.7.1.min.js"></script>
	 	<script src="js/bootstrap.min.js"></script>
	 	<script src="js/listarReservas.js"></script>	 		 	
	 		 	
	 	<title>GEREHO</title>        
    	<link rel="shortcut icon" type="image/x-icon" href="imagen/logo-v.ico" />
    </head>
	<body>
	<?php
		include "menugere.php";
	?>
	<center>
		<h1>Listado de Reservas</h1><br>
		<table class="table table-bordered table-hover">
			<thead>
				<tr class=info>
					<th>Apellido</th>
					<th>Nombre</th>
					<th>Email</th>
					<th>Telefono</th>
					<th>Cant</th>
					<th>Desde</th>
					<th>Hasta</th>
					<th>Comentario</th>
					<th>Acción</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$datos = traerDatos();
					foreach ($datos as $key => $value) {
						echo "<tr><td>".$value['apellido']."</td><td>".$value['nombre']."</td><td>".$value['email']
						."</td><td>".$value['telefono']."</td><td>".$value['cantPersonas']."</td><td>".$value['fdesde']
						."</td><td>".$value['fhasta']."</td><td>".$value['comentario']."</td>"
						."<td> <a href='#' class='btn btn-danger' data-href='delete.php?id=". $value['id']."' data-toggle='modal' data-target='#confirm-delete'>Eliminar</a>"."</td></tr>";

					}				
				?>
			</tbody>
		</table>
	</center>

	<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
		<div class="modal-content">
		    <div class="modal-header">
		            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		            <h4 class="modal-title" id="myModalLabel">Confirmar</h4>
		    </div>
		    <div class="modal-body">
		        Está seguro que desea eliminar esta reserva ?
		    </div>
		    <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
		        <a class="btn btn-danger btn-ok">Confirmar</a>
		    </div>
		</div>
	    </div>
	</div>

	<script>
		$('#confirm-delete').on('show.bs.modal', function(e) {
		    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
		});
	</script>
	<?php
		function traerDatos(){
			//leer archivo de configuracion
			$config = parse_ini_file('config.ini');

			foreach($config as $key => $value) {
			    define($key, $value);
			}
			//conexion a la base de datos
			$conn=mysqli_connect(hostMysql,userMysql,pwdMysql,baseMysql);
			// Chequeo la conexion
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 

			$array = [];

			$resultado = $conn->query("SELECT * FROM reservas ORDER BY fdesde DESC");
			while ($result = mysqli_fetch_assoc($resultado)){
				array_push($array,$result);
			}

			$conn->close();
			return $array;
		}
	?>
	</body>
</html>
