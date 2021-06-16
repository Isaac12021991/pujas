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
						<li class="breadcrumb-item active"><a href="configuracion">Configuración porcentaje de puja</a></li>
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
												<a href="#navpills-1" class="nav-link active px-2 px-lg-3" data-toggle="tab" aria-expanded="false">CONFIGURACIÓN DE PORCENTAJE PUJAS</a>
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
												<th>Porcentaje</th>
												<th>Opción</th>
											</tr>
										</thead>
										<tbody>


											<?php

											require("../conexion_/conexion.php");

											$porcentajes_pagos="SELECT * FROM porcentajes_pagos ";
											$porcentajes_pagos_=mysqli_query($mysqli,$porcentajes_pagos);

											while ($porcen=mysqli_fetch_row ($porcentajes_pagos_)){

												$id_porcentaje = $porcen[0];
												$porcentaje = $porcen[1];

												echo 
												'
												<tr>
												<td>#'.htmlentities($id_porcentaje).'</td>
												<td>'.htmlentities($porcentaje).' %</td>

												<td><a href="?porcentaje='.$id_porcentaje.'"><button class="btn btn-success">Editar</button></a></td>

												</tr>

												';
											}



											if(isset($_GET['porcentaje'])){


												$porcentaje_details=$_GET['porcentaje'];

												$porcentajes_pagos2="SELECT * FROM porcentajes_pagos WHERE id_porcentaje='$porcentaje_details'";
												$porcentajes_pagos2_=mysqli_query($mysqli,$porcentajes_pagos2);


												while ($porcen2=mysqli_fetch_row ($porcentajes_pagos2_)){


													$id_porcentaje = $porcen2[0];
													$porcentaje = $porcen2[1];

												}


												echo 
												'
												<div class="modal fade" id="Modal">
												<div class="modal-dialog" role="document">
												<div class="modal-content">
												<div class="modal-header">
												<h5 class="modal-title">CONFIGURACIÓN DE PORCENTAJE DE PAGO</h5>
												<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
												</button>
												</div>
												<div class="modal-body">
												<form method="POST">
												<div class="form-row">
												<div class="form-group col-md-12">
												<center><label>Porcentaje de pago</label></center>

												<select type="text" id="porcentaje" name="porcentaje" class="form-control">
												<option value="'.htmlentities($porcentaje).'">'.htmlentities($porcentaje).'%</option>
												<option value="0.10">10%</option>
												<option value="0.20">20%</option>
												<option value="0.30">30%</option>
												<option value="0.40">40%</option>
												<option value="0.50">50%</option>
												<option value="0.60">60%</option>
												<option value="0.70">70%</option>
												<option value="0.80">80%</option>
												<option value="0.90">90%</option>
												</select>
					
												<center><small>*Selecciona el porcentaje*</small></center>
												</div>

												</div>
												<center>
												<button type="button" id="editar-config" class="btn btn-success">Editar tiempo</button>
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
	<script src="validaciones_/_configuracion_porcentaje/js/configuracion-editar.js"></script>
	<!--********Scripts********-->

</body>
</html>