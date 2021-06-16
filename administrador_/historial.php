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


		<?php

		require("../conexion_/conexion.php");

		$historial2="SELECT * FROM historial WHERE id_sala=".$_GET['historial']." LIMIT 1";
		$historial_2=mysqli_query($mysqli,$historial2);

		while ($histori2=mysqli_fetch_row ($historial_2)){

			$total_recogido = $histori2[7];

		}


		$query3 = mysqli_query($mysqli, "SELECT * FROM porcentajes_pagos ");
		$data3 = mysqli_fetch_array($query3);

		$porcentaje=$data3['porcentaje'];


		$total_ganancias=$total_recogido*$porcentaje;
		$total_ganancias_user=$total_recogido-$total_ganancias;



		$s = mysqli_query($mysqli, "SELECT pote, pote_tablazo FROM salas WHERE id_sala=".$_GET['historial']." ");
		$sm = mysqli_fetch_assoc($s);

		$pote_tablazo=$sm['pote_tablazo'];
		$pote=$sm['pote'];


		$s2 = mysqli_query($mysqli, "SELECT ganancias as total_ganancias_casa FROM total_ganancias_casa WHERE id_total='1'");
		$sm2 = mysqli_fetch_assoc($s2);

		$total_ganancias_casa=$sm2['total_ganancias_casa'];

		?>


		<!--*******Content*******-->
		<div class="content-body">
			<!-- row -->
			<div class="container-fluid">
				<div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index">Inicio</a></li>
						<li class="breadcrumb-item active"><a href="configuracion">Historial</a></li>
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
												<a class="nav-link active px-2 px-lg-3" data-toggle="tab" aria-expanded="false">
													<font color="D38C06">HISTORIAL DEL REMATE <font size="3" color="00B59C">#<?php echo $_GET['historial'];?></font></font></a>


													<br>
													<br>
													TOTAL TABLAS = $<?php echo $total_recogido ?> 
													<br>
													<br>
													TOTAL GANANCIAS USUARIO = $<?php echo $total_ganancias_user ?> 
													<br>
													<br>
													TOTAL GANANCIA CASA =   $<?php echo $total_ganancias ?> 
													<br>
													<br>
													POTE DEL REMATE = $<?php echo $pote ?> 
													<br>
													<br>
													POTE TABLAZO DEL REMATE = $<?php echo $pote_tablazo ?> 
													<br>
													<br>
													GANANCIAS TOTALES PARA EL CLIENTE = $ <?php echo $total_ganancias_user+$pote+$pote_tablazo ?> 
													<br>
													<br>
													TOTAL GANANCIAS DE LA CASA = $ <?php echo $total_ganancias_casa ?> 

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
													<th>ID</th>
													<th>Numero_tabla</th>
													<th>Id remate</th>
													<th>Id usuario</th>
													<th>Nombre del ejemplar</th>	
													<th>cliente</th>
													<th>precio</th>
												</tr>
											</thead>
											<tbody>


												<?php

												require("../conexion_/conexion.php");

												$historial="SELECT * FROM historial WHERE id_sala=".$_GET['historial']."";
												$historial_=mysqli_query($mysqli,$historial);

												while ($histori=mysqli_fetch_row ($historial_)){

													$id_tabla  = $histori[0];
													$numero_tabla = $histori[1];
													$id_sala = $histori[2];
													$id_usuario = $histori[3];	
													$nombre_ejemplar = $histori[4];	
													$cliente = $histori[5];
													$precio = $histori[6];
													$total_recogido = $histori[7];
													$estado = $histori[8];

													echo 
													'
													<tr>
													<td>'.htmlentities($id_tabla).'</td>
													<td>Campo #'.htmlentities($numero_tabla).'</td>
													<td>Remate #'.htmlentities($id_sala).'</td>
													<td><a href="usuarios?user='.htmlentities($id_usuario).'" target="_black"><button class="btn btn-success">VER</button></a></td>
													<td>'.htmlentities($nombre_ejemplar).'</td>
													<td>'.htmlentities($cliente).'</td>
													<td>'.htmlentities($precio).'</td>
													</tr>

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
		<script src="validaciones_/_configuracion/js/configuracion-editar.js"></script>
		<!--********Scripts********-->

	</body>
	</html>