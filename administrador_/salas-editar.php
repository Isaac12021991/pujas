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
	<link href="css/sweetalert2.min.css" rel="stylesheet" type="text/css">

</head>

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


		<!--********************************** Content ***********************************-->
		<div class="content-body">
			<div class="container-fluid">
				<div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index">Inicio</a></li>
						<li class="breadcrumb-item active"><a href="pagina-principal">Editar remate</a></li>
					</ol>
				</div>
				<div class="row">

					<div class="col-md-12">
						<div class="card text-white bg-dark">
							<div class="card-body mb-0">
								

								<form method="POST">

									<div class="modal-body">

										<div class="form-row">
											<div class="form-group col-md-12">
												<center>EDITAR INFORMACIÓN DE LA TABLA</center>
											</div>
										</div>

										<hr>

										<div class="form-row">


											<?php 

											require("../conexion_/conexion.php");

											$edit=$_GET['edit'];

											$salas="SELECT tablas.*, salas.fecha_activacion  FROM tablas
											left join salas on salas.id_sala = tablas.id_sala WHERE tablas.id_sala='$edit'";
						
											$salas_=mysqli_query($mysqli,$salas);


											while ($sala=mysqli_fetch_row ($salas_)){


												$id_tabla = $sala[0];
												$numero_tabla = $sala[1];
												$id_sala = $sala[2];
												$id_usuario = $sala[3];
												$nombre_ejemplar = $sala[4];
												$cliente = $sala[5];
												$precio = $sala[6];
												$estado = $sala[7];
												$precio_inicial = $sala[8];
												$in_activo = $sala[9];
												$fecha_activacion = $sala[10];

												$fecha_activacion = strtotime($fecha_activacion);
												$fecha_activacion = $fecha_activacion + 900;
												echo
												'
												<div class="col-md-3">
												<div class="card">
												<ul class="list-group list-group-flush">
												<center>
												<li class="list-group-item">Campo # '.htmlentities($numero_tabla).'</li>
												<li class="list-group-item">
												<input type="text" id="id_sala" name="id_sala" value="'.htmlentities($id_sala).'" style="display: none;">
												<label>Nombre del ejemplar</label>';
												if (time() < $fecha_activacion):
												if ($in_activo == 1):
												echo '<input type="text" id="nombre_ejemplar'.htmlentities($numero_tabla).'" name="nombre_ejemplar'.htmlentities($numero_tabla).'" value="'.htmlentities($nombre_ejemplar).'" class="form-control" placeholder="Nombre del ejemplar">
												</li>
													<a id="sala-retirar" onclick="retirar('.$id_tabla.')" class="btn btn-danger">Retirar</a>';
												else:

													echo 'Ejemplar '.htmlentities($nombre_ejemplar).' Retirado';

												endif;
											else:

												echo 'Tiempo agotado';

											endif;

												echo '</center>
												</ul>
												</div>
												</div>
												';

											}

											?>

										</div>

									</div>
									<div class="modal-footer">
										<a href="salas"><button type="button" class="btn btn-danger" data-dismiss="modal">Volver</button></a>
										<button type="button" id="sala-editar" class="btn btn-primary">Editar</button>
									</div>

								</form>




							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!--********************************** Content ***********************************-->



		<!--****** Footer ******-->
		<?php include'include/footer.php'?>	
		<!--****** Footer ******-->



	</div>


	<!--**************************Scripts*******************************-->
	<script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>	
	<script src="js/sweetalert2.min.js"></script>
	<script src="validaciones_/_salas/js/sala-editar-campos.js"></script>
	<!--**************************Scripts*******************************-->

<script type="text/javascript">
	
function retirar(id) {
let formData = new FormData();

formData.append('id_tabla',id);
   $.ajax({
      url: 'retirar_ejemplar',
      type: 'post',
      data: formData,
      contentType: false,
      processData: false,
      success: function(data) {

      	alert(data);

     }
   });
	// body...
}

</script>




</body>

</html>