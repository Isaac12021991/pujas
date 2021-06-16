<?php

session_start();
if (@!$_SESSION['usuario']) {
	header("Location:desconectar");
}elseif ($_SESSION['rol']==2) {
	header("Location:desconectar");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>LATIN CLUB</title>
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon.jpeg">
	<link href="vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/LineIcons.css" rel="stylesheet">
	<link href="css/style-p.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<link href="css/sweetalert2.min.css" rel="stylesheet" type="text/css">

</head>

<script type="text/javascript">
	
	$( document ).ready(function() {
		$('#Modal').modal('toggle')
	});

</script>

<body>

	<!--****** Preloader ******-->
	<div id="preloader">
		<div class="sk-three-bounce">
			<div class="sk-child sk-bounce1"></div>
			<div class="sk-child sk-bounce2"></div>
			<div class="sk-child sk-bounce3"></div>
		</div>
	</div>
	<!--****** Preloader ******-->


	<div id="main-wrapper">

		<!--******* Nav header ***********-->
		<div class="nav-header">
			<a href="index.html" class="brand-logo">
				<img class="logo-abbr CEL" src="img/logo.jpeg" alt="" style="border-radius: 70px;">
				<img class="logo-compact PC" src="img/logo.jpeg" alt="" style="border-radius: 70px;">
				<img class="brand-title PC" src="img/logo.jpeg" alt="" style="border-radius: 70px;">
			</a>

			<div class="nav-control">
				<div class="hamburger">
					<span class="line"></span><span class="line"></span><span class="line"></span>
				</div>
			</div>
		</div>
		<!--******* Nav header ***********-->

		
		<!--****** Header ******-->
		<?php include'include/header.php'?>	
		<!--****** Header ******-->


		<!--****** Sidebar ******-->
		<?php include'include/sidebar.php'?>	
		<!--****** Sidebar ******-->
		


		<!--*******Content*******-->
		<div class="content-body">
			<!-- row -->
			<div class="container-fluid">
				<div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index">Inicio</a></li>
						<li class="breadcrumb-item active"><a href="salas">Remates</a></li>
					</ol>
				</div>
				<div class="row">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-body px-4 py-3 py-md-2">
								<div class="row align-items-center">
									<div class="col-sm-12 col-md-7">
										<ul class="nav nav-pills review-tab">
											<li class="nav-item">
												<a href="#navpills-1" class="nav-link active px-2 px-lg-3" data-toggle="tab" aria-expanded="false">CREAR CARRERAS</a>
											</li>
										</ul>
									</div>
									<div class="col-sm-12 col-md-5 text-md-right mt-md-0 mt-4">
										<a href="salas-agregar" class="btn btn-primary rounded mr-1 btn-sm px-4">Nuevo remate</a>

										<a data-toggle="modal" data-target="#eliminarsalas" class="btn btn-danger rounded mr-1 btn-sm px-4">Reiniciar remate</a>
									</div>

									<div class="modal fade" id="eliminarsalas">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">¿ DESEAS REINICIAR LOS REMATES DESDE CERO ?</h5>
													<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
													</button>
												</div>

												<form method="POST">

													<div class="modal-body">
														
														<div class="form-row">
															<div class="form-group col-md-12">
																<center>AL REINICIAR LOS REMATES ESTOS SE ELIMINARAN POR COMPLETO, CON ELLO ELIMINAS EL HISTORIAL DE LOS REMATES Y EL REGISTRO DE GANADORES ASINADOS A ESOS REMATES</center>
																<br>
																<center>
																	<a href="validaciones_/_salas/sala-eliminar" class="btn btn-success">SI</a>  <button type="button" class="btn btn-danger" data-dismiss="modal">NO</button>
																</center> 
															</div>
														</div>

													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>
													</div>

												</form>

											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-12">	
						<div class="tab-content">
							<div id="navpills-1" class="tab-pane active">
								<div class="table-responsive table-hover fs-14">
									<table class="table mb-4 dataTablesCard fs-14" id="example5">
										<thead>
											<tr>
												<th>ID</th>
												<th>Carrera #</th>
												<th>Hipodromo</th>
												<th>Distancia</th>
												<th>Estado</th>
												<th>Detalle</th>
												<th>Opciones</th>
											</tr>
										</thead>
										<tbody>


											<?php

											require("../conexion_/conexion.php");

											$salas="SELECT * FROM salas";
											$salas_=mysqli_query($mysqli,$salas);

											while ($sala=mysqli_fetch_row ($salas_)){

												$id_sala = $sala[0];
												$numero_sala = $sala[1];
												$tipo_remate = $sala[2];
												$anuncio1 = $sala[3];
												$anuncio2 = $sala[4];
												$hipodromo = $sala[5];
												$distancia = $sala[6];
												$pote_tablazo = $sala[7];
												$pote = $sala[8];
												$estado = $sala[9];

												echo 
												'
												<tr>
												<td>'.htmlentities($id_sala).'</td>
												<td>Carrera #'.htmlentities($numero_sala).'</td>
												<td>'.htmlentities($hipodromo).'</td>
												<td>'.htmlentities($distancia).'</td>
												';
												if($estado==0){

													echo '<td><span class="badge light badge-success">Activo</span></td>';

												}else if($estado==2){

													echo '<td><span class="badge light badge-danger">Falta calificar</span></td>';

												}else if($estado==3){

													echo '<td><span class="badge light badge-info">Calificado</span></td>';
												}else{

													echo '<td><span class="badge light badge-warning">Pendiente</span></td>';
												}
												echo
												'
												<td><a href="?sala='.$id_sala.'"><button class="btn btn-success">Detalle</button></a></td>


												<td>
												<div class="row">
												';
												if($estado==1){

													echo 
													'
													<div class="col-md-6">
													<center><a href="?start='.$id_sala.'"><button class="btn btn-primary">INICIAR REMATE</button></a></center>
													</div>
													';

												}else{}

												if($estado==0){

													echo 
													'
													<div class="col-md-6">
													<center><a href="?stop='.$id_sala.'"><button class="btn btn-danger">FINALIZAR REMATE</button></a></center>
													</div>

													<div class="col-md-6">
													<center><a href="salas-editar?edit='.$id_sala.'"><button class="btn btn-info">EDITAR TABLAS</button></a></center>
													</div>
													';

												}else{}
												echo
												'
												</div>
												</td>


												</tr>

												';
											}



											if(isset($_GET['sala'])){


												$sala_details=$_GET['sala'];

												$salas2="SELECT * FROM salas WHERE id_sala='$sala_details'";
												$salas2_=mysqli_query($mysqli,$salas2);


												while ($sala2=mysqli_fetch_row ($salas2_)){


													$id_sala2 = $sala2[0];
													$numero_sala2 = $sala2[1];
													$tipo_remate2 = $sala2[2];
													$anuncio12 = $sala2[3];
													$anuncio22 = $sala2[4];
													$hipodromo2 = $sala2[5];
													$distancia2 = $sala2[6];
													$pote_tablazo2 = $sala2[7];
													$pote2 = $sala2[8];
													$estado2 = $sala2[9];

												}


												echo 
												'
												<div class="modal fade" id="Modal">
												<div class="modal-dialog" role="document">
												<div class="modal-content">
												<div class="modal-header">
												<h5 class="modal-title">DETALLE DEL REMATE #'.htmlentities($numero_sala2).'</h5>
												<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
												</button>
												</div>
												<div class="modal-body">
												<form method="POST">
												<div class="form-row">
												<input type="text" id="id_sala2" name="id_sala2" value="'.htmlentities($sala_details).'" class="form-control" style="display: none;">
												<div class="form-group col-md-6">
												<label>Numero de carrera</label>
												<input type="text" id="numero_sala2" name="numero_sala2" value="'.htmlentities($numero_sala2).'" class="form-control" placeholder="Ingresa el numero de carrera">
												</div>
												<div class="form-group col-md-6">
												<label>Tipo de remate</label>
												<select id="tipo" name="tipo" class="form-control">
												<option value="'.htmlentities($tipo_remate2).'">'.htmlentities($tipo_remate2).'</option>
												<option value="NACIONAL">NACIONAL</option>
												<option value="INTERNACIONAL">INTERNACIONAL</option>
												</select>
												</div>
												<div class="form-group col-md-6">
												<label>Anuncio #1</label>
												<textarea type="text" id="anuncio12" name="anuncio12" class="form-control" placeholder="Este anuncio aparecera en el campo del remate">'.htmlentities($anuncio12).'</textarea>
												</div>
												<div class="form-group col-md-6">
												<label>Anuncio #2</label>
												<textarea type="text" id="anuncio22" name="anuncio22" class="form-control" placeholder="Este anuncio aparecera en el campo del remate">'.htmlentities($anuncio22).'</textarea>
												</div>
												<div class="form-group col-md-6">
												<label>Hipodromo</label>
												<input type="text" id="hipodromo2" name="hipodromo2" value="'.htmlentities($hipodromo2).'" class="form-control" placeholder="Ingresa el hipodromo">
												</div>
												<div class="form-group col-md-6">
												<label>Distancia</label>
												<input type="text" id="distancia2" name="distancia2" value="'.htmlentities($distancia2).'" class="form-control" placeholder="Ingresa la distancia">
												</div>
												<div class="form-group col-md-6">
												<label>Pote tablazo</label>
												<input type="text" id="pote_tablazo2" name="pote_tablazo2" value="'.htmlentities($pote_tablazo2).'" class="form-control" placeholder="Ingresa el pote tablazo">
												</div>
												<div class="form-group col-md-6">
												<label>Pote</label>
												<input type="text" id="pote2" name="pote2" value="'.htmlentities($pote2).'" class="form-control" placeholder="Ingresa el pote">
												</div>
												</div>
												<center>
												';
												if($estado2==2){

													echo '<a href="?ganador='.htmlentities($sala_details).'"><button type="button" class="btn btn-warning">Ingresar ganador</button></a>';

													echo '<a href="historial?historial='.htmlentities($sala_details).'" target="_black"><button type="button" class="btn btn-dark">Historial</button></a>';
													
												}else if($estado2==3){

													echo '<button type="button" disabled  class="btn btn-danger">SALA YA CON GANADORES</button>';

													echo '<a href="historial?historial='.htmlentities($sala_details).'"><button type="button" class="btn btn-dark">Historial</button></a>';

												}else{

													echo '<button type="button" disabled class="btn btn-info">AUN NO SE PUEDE INGRESAR GANADORES</button>';

												}

												echo'
												<button type="button" id="editar-salas" class="btn btn-success">Editar</button>
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

											}else if(isset($_GET['ganador'])){


												$ganador_details=$_GET['ganador'];

												$ganador="SELECT * FROM historial WHERE id_sala='$ganador_details'";
												$ganador_=mysqli_query($mysqli,$ganador);


												while ($gana=mysqli_fetch_row ($ganador_)){

													$id_sala3 = $gana[2];


												}


												echo 
												'
												<div class="modal fade" id="Modal">
												<div class="modal-dialog" role="document">
												<div class="modal-content">
												<div class="modal-header">
												<h5 class="modal-title">INGRESA EL GANADOR DE LA SALA #'.htmlentities($id_sala3).'</h5>
												<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
												</button>
												</div>
												<div class="modal-body">
												<form method="POST">
												<div class="form-row">
												<input type="text" id="id_sala3" name="id_sala3" value="'.htmlentities($id_sala3).'" class="form-control" style="display: none;">
												<div class="form-group col-md-12">
												<center><label>NUMERO DE SALA</label></center>
												<input type="text" value="SALA #'.htmlentities($id_sala3).'" class="form-control" readonly>
												</div>

												<div class="form-group col-md-12">
												<label>ESCOGER GANADOR DEL PRIMER PUESTO</label>
												<div class="input-group mb-3  input-success">
												<div class="input-group-prepend">
												<span class="input-group-text">PRIMER LUGAR</span>
												</div>
												<select name="primer_lugar" id="primer_lugar" class="form-control">
												<option value="">Selecciona.....</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>
												<option value="13">13</option>
												<option value="14">14</option>
												</select>
												</div>
												</div>

												</div>
												<center>
												<button type="button" id="agregar-ganador" class="btn btn-success">GUARDAR</button>
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

											}else if(isset($_GET['start'])){


												$start_details=$_GET['start'];

												echo 
												'
												<div class="modal fade" id="Modal">
												<div class="modal-dialog" role="document">
												<div class="modal-content">
												<div class="modal-header">
												<h5 class="modal-title">INICIANDO EL REMATE CON ID #'.htmlentities($start_details).'</h5>
												<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
												</button>
												</div>
												<div class="modal-body">

												<center>	
												<h3>¿ Deseas iniciar este remate ?</h3>
												</center>
												<br>
												<div class="row">

												<div class="col-md-6">
												<center>
												<a href="validaciones_/_iniciar/iniciando?id='.htmlentities($start_details).'"><button class="btn btn-success">SI</button></a>
												</center>
												</div>

												<div class="col-md-6">
												<center>
												<a href="salas"><button class="btn btn-danger">NO</button></a>
												</center>
												</div>

												</div>

												</div>
												<div class="modal-footer">
												<button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>
												</div>
												</div>
												</div>
												</div>
												';


											}else if(isset($_GET['stop'])){


												$stop_details=$_GET['stop'];

												$stop="SELECT * FROM tablas WHERE id_sala='$stop_details'";
												$stop_=mysqli_query($mysqli,$stop);

												$result = 0;
												$result = mysqli_num_rows($stop_);
												if ($result > 0) {

													while ($final=mysqli_fetch_row ($stop_)){

														$id_sala5 = $final[2];


													}


													echo 
													'
													<div class="modal fade" id="Modal">
													<div class="modal-dialog" role="document">
													<div class="modal-content">
													<div class="modal-header">
													<h5 class="modal-title">FINALIZANDO EL REMATE CON ID #'.htmlentities($id_sala5).'</h5>
													<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
													</button>
													</div>
													<div class="modal-body">
													
													<center>	
													<h3>¿ Deseas finalizar el remate ?</h3>
													</center>
													<br>
													<div class="row">

													<div class="col-md-6">
													<center>
													<a href="validaciones_/_finalizar/cerrando?id='.htmlentities($id_sala5).'"><button class="btn btn-success">SI</button></a>
													</center>
													</div>

													<div class="col-md-6">
													<center>
													<a href="salas"><button class="btn btn-danger">NO</button></a>
													</center>
													</div>

													</div>

													</div>
													<div class="modal-footer">
													<button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>
													</div>
													</div>
													</div>
													</div>
													';

												}else{


												}

											}else if(isset($_GET['ok'])){



												echo 
												'
												<div class="modal fade" id="Modal">
												<div class="modal-dialog" role="document">
												<div class="modal-content">
												<div class="modal-header">
												<h5 class="modal-title">HAY UN REMATE YA ACTIVO</h5>
												<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
												</button>
												</div>
												<div class="modal-body">

												<center>	
												<h3>En estos momentos ya se encuentra un remate activo, debes finalizar ese remate para activar esta</h3>
												</center>
												<br>
												<div class="row">

												<div class="col-md-12">
												<center>
												<a href="salas"><button class="btn btn-danger">OK</button></a>
												</center>
												</div>

												</div>

												</div>
												<div class="modal-footer">
												<a href="salas"><button type="button" class="btn btn-danger light">Cerrar</button>
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
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--*******Content*******-->


		<!--****** Footer ******-->
		<?php include'include/footer.php'?>	
		<!--****** Footer ******-->


	</div>


	<!--********Scripts********-->
	<script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
	<script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
	<script src="js/plugins-init/datatables.init.js"></script>
	<script src="js/sweetalert2.min.js"></script>
	<script src="validaciones_/_salas/js/sala-editar.js"></script>
	<script src="validaciones_/_salas/js/ganador-agregar.js"></script>
	<!--********Scripts********-->

</body>
</html>