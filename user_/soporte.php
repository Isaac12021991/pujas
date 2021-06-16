<?php

session_start();
if (@!$_SESSION['usuario']) {
	header("Location:desconectar");
}elseif ($_SESSION['rol']==1) {
	header("Location:desconectar");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="img/favicon.jpeg">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<link href="../css/sweetalert2.min.css" rel="stylesheet" type="text/css">

	<title>LATIN CLUB</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">
</head>

<script type="text/javascript">
	
	$( document ).ready(function() {
		$('#Modal').modal('toggle')
	});

</script>

<body style="background-color: #C9E8C9;">

	<!-- ================================================== -->
	<?php include'include/header.php'?>
	<!-- ================================================== -->

	<br>

	<!-- ================================================== -->
	<div class="container h-100">
		<div class="row justify-content-center h-100">
			<div class="col-sm-12 align-self-center text-center">
				<div class="card shadow">
					<div class="card-body color-verde">  

						<div class="row">

							<!------------------------------------------------->
							<div class="col-md-12" style="margin-bottom: 30px;">

								<div class="card">
									<div class="card-header" style="background-color: #456176; color: white;">
										<div class="row">
											<div class="col-md-8">
												<h5>SOPORTE LATIN CLUB</h5>
											</div>
											<div class="col-md-4">
												<a href="soporte?soportenew=new"><button class="btn btn-success">Crear nuevo Ticket</button></a>
											</div>
										</div>
										
										
									</div>
									<ul class="list-group list-group-flush">

										<div class="row">

											<div class="col-md-12">

												<table class="table">
													<thead class="thead-dark">
														<tr>
															<th scope="col">Titulo</th>
															<th scope="col">Texto</th>
															<th scope="col">Estado</th>
															<th scope="col">Fecha</th>
															<th scope="col">Detalle</th>
														</tr>
													</thead>
													<tbody>


														<?php

														require("../conexion_/conexion.php");

														$id_usuario=$_SESSION['id_usuario'];

														$soporte="SELECT * FROM soporte WHERE id_usuario='$id_usuario'";
														$soporte_=mysqli_query($mysqli,$soporte);

														while ($sopor=mysqli_fetch_row ($soporte_)){

															$id_soporte = $sopor[0];
															$id_usuario = $sopor[1];
															$titulo = $sopor[2];
															$texto = $sopor[3];
															$estado = $sopor[4];
															$fecha = $sopor[5];

															echo 
															'
															<tr>
															<td>'.htmlentities($titulo).'</td>
															<td>'.htmlentities($texto).'</td>
															';
															if($estado==0){

																echo '<td><span class="badge light badge-warning">Sin responder</span></td>';

															}else{

																echo '<td><span class="badge light badge-success">Respondido</span></td>';
															}
															echo
															'
															<td>'.htmlentities($fecha).'</td>
															';
															if($estado==0){

																echo '<td><button class="btn btn-danger">SIN RESPUESTA</button></td>';

															}else{

																echo '<td><a href="soporte?soporteresp='.htmlentities($id_soporte).'"><button class="btn btn-success">VER RESPUESTA</button></a></td>';

															}
															echo
															'
															</tr>

															';
														}



														if(isset($_GET['soportenew'])){


															echo 
															'
															<div class="modal fade" id="Modal">
															<div class="modal-dialog" role="document">
															<div class="modal-content">
															<div class="modal-header">
															<h5 class="modal-title">CREAR NUEVO TICKET - SOPORTE</h5>
															<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
															</button>
															</div>
															<div class="modal-body">
															<form method="POST">
															<div class="form-row">
															<div class="form-group col-md-12">
															<label><b>Titulo</b></label>
															<input type="text" id="titulo" name="titulo" style="border: 2px solid black;" class="form-control" placeholder="Ingresa el titulo">
															</div>
															<div class="form-group col-md-12">
															<label><b>Texto</b></label>
															<textarea type="text" id="texto" name="texto" style="border: 2px solid black;" rows="5" class="form-control" placeholder="Ingresa el texto que deseas enviar"></textarea>
															</div>
															</div>
															<center>
															<button type="button" id="enviar-ticket" class="btn btn-info btn-block">Enviar</button>
															</center>
															</form>
															</div>
															<div class="modal-footer">
															<button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>
															</div>
															</div>
															</div>
															</div>
															';

														}else if(isset($_GET['soporteresp'])){

															$id_soporte2=$_GET['soporteresp'];

															$soporte2="SELECT * FROM soporte WHERE id_soporte='$id_soporte2'";
															$soporte_2=mysqli_query($mysqli,$soporte2);

															while ($sopor2=mysqli_fetch_row ($soporte_2)){

																$respuesta = $sopor2[6];
															}


																echo 
																'
																<div class="modal fade" id="Modal">
																<div class="modal-dialog" role="document">
																<div class="modal-content">
																<div class="modal-header">
																<h5 class="modal-title">RESPUES DE SOPORTE - LATIN CLUB</h5>
																<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
																</button>
																</div>
																<div class="modal-body">
																<form method="POST">
																<div class="form-row">
																<div class="form-group col-md-12">
																<label><b>Respuesta</b></label>
																<textarea type="text" id="texto" name="texto" style="border: 2px solid black;" rows="5" class="form-control" readonly>'.htmlentities($respuesta).'</textarea>
																</div>
																</div>
																</form>
																</div>
																<div class="modal-footer">
																<button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>
																</div>
																</div>
																</div>
																</div>
																';
															}


															?>

														</tbody>
													</table>
												</div>

											</div>

											<hr>

										</ul>
									</div>

								</div>
								<!------------------------------------------------->

							</div>

						</div>
					</div>
				</div>
			</div>
		</div>  
		<!-- ================================================== -->



		<!-- ================================================== -->
		<?php include'include/footer.php'?>
		<!-- ================================================== -->



		<!-- ================================================== -->
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/vendor/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="../js/sweetalert2.min.js"></script>
		<script src="validaciones_/js/actualizar_precio.js"></script>
		<script src="validaciones_/_soporte/js/ticket-agregar.js"></script>
		<!-- ================================================== -->

	</body>
	</html>
