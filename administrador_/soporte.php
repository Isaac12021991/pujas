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
						<li class="breadcrumb-item active"><a href="salas">Soporte</a></li>
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
												<a href="#navpills-1" class="nav-link active px-2 px-lg-3" data-toggle="tab" aria-expanded="false">SOPORTE</a>
											</li>
										</ul>
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
												<th>#</th>
												<th>Usuario</th>
												<th>Titulo</th>
												<th>Texto</th>
												<th>Estado</th>
												<th>Fecha</th>
												<th>Detalle</th>
											</tr>
										</thead>
										<tbody>


											<?php

											require("../conexion_/conexion.php");

											$soporte="SELECT * FROM soporte ";
											$soporte_=mysqli_query($mysqli,$soporte);

											while ($sopor=mysqli_fetch_row ($soporte_)){

												$id_soporte = $sopor[0];
												$id_usuario = $sopor[1];
												$titulo = $sopor[2];
												$texto = $sopor[3];
												$estado = $sopor[4];
												$fecha = $sopor[5];
												$respuesta = $sopor[6];

												echo 
												'
												<tr>
												<td> #'.htmlentities($id_soporte).'</td>
												<td><a href="usuarios?user='.htmlentities($id_usuario).'" target="_black"><button class="btn btn-info">'.htmlentities($id_usuario).'</button></a></td>
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
												<td><a href="?soporte='.$id_soporte.'"><button class="btn btn-success">Responder</button></a></td>

												</tr>

												';
											}



											if(isset($_GET['soporte'])){

												$id_soporte_get=$_GET['soporte'];

												$soporte2="SELECT * FROM soporte WHERE id_soporte='$id_soporte_get'";
												$soporte_2=mysqli_query($mysqli,$soporte2);

												while ($sopor2=mysqli_fetch_row ($soporte_2)){

													$respuesta = $sopor2[6];



													echo 
													'
													<div class="modal fade" id="Modal">
													<div class="modal-dialog" role="document">
													<div class="modal-content">
													<div class="modal-header">
													<h5 class="modal-title">RESPONDER TICKET A CLIENTE</h5>
													<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
													</button>
													</div>
													<div class="modal-body">
													<form method="POST">
													<div class="form-row">
													<input type="text" id="id_soporte" name="id_soporte" value="'.htmlentities($id_soporte_get).'" class="form-control"  style="display: none;" >
													<div class="form-group col-md-12">
													<label>Respuesta</label>
													<textarea type="text" id="respuesta" name="respuesta" rows="8" class="form-control">'.htmlentities($respuesta).'</textarea>
													</div>
													</div>
													<center>
													<button type="button" id="enviar-respuesta" class="btn btn-info btn-block">Enviar</button>
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
												}
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
		<script src="validaciones_/_soporte/js/soporte-editar.js"></script>
		<!--********Scripts********-->

	</body>
	</html>