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
	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/LineIcons.css" rel="stylesheet">
	<link href="css/style-p.css" rel="stylesheet">
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

		
		<!--**********************************
            Content body start
            ***********************************-->
            <div class="content-body">
            	<!-- row -->
            	<div class="container-fluid">
            		<div class="row">
            			<div class="col-xl-6 col-xxl-5 col-lg-6">
            				<div class="card ticket-bx">
            					<div class="card-body">
            						<div class="d-sm-flex d-block pb-sm-3 align-items-end">
            							<div class="mr-auto pr-3 mb-2 mb-sm-0">
            								<span class="text-white fs-20 font-w200 d-block mb-sm-3 mb-2">Usuarios activos</span>
            								<h2 class="fs-40 text-white mb-0">

            									<?php
            									require("../conexion_/conexion.php");
            									$user = mysqli_query($mysqli,"SELECT COUNT(*) AS usuarios FROM usuarios WHERE rol='2'");
            									$user_ = mysqli_fetch_array($user);
            									echo $user_['usuarios'];
            									?>

            									<span class="fs-18 ml-2">+</span></h2>
            								</div>
            								<div class="d-flex flex-wrap">
            									<svg width="87" height="58" viewBox="0 0 87 58" fill="none" xmlns="http://www.w3.org/2000/svg">
            										<path d="M18.4571 37.6458C11.9375 44.6715 4.81049 52.3964 2 55.7162H68.8125C77.6491 55.7162 84.8125 48.5528 84.8125 39.7162V2L61.531 31.9333C56.8486 37.9536 48.5677 39.832 41.746 36.4211L37.3481 34.2222C30.9901 31.0432 23.2924 32.4352 18.4571 37.6458Z" fill="url(#paint0_linear)"/>
            										<path d="M2 55.7162C4.81049 52.3964 11.9375 44.6715 18.4571 37.6458C23.2924 32.4352 30.9901 31.0432 37.3481 34.2222L41.746 36.4211C48.5677 39.832 56.8486 37.9536 61.531 31.9333L84.8125 2" stroke="white" stroke-width="4" stroke-linecap="round"/>
            										<defs>
            											<linearGradient id="paint0_linear" x1="43.4062" y1="8.71453" x2="46.7635" y2="55.7162" gradientUnits="userSpaceOnUse">
            												<stop stop-color="white" offset="0"/>
            												<stop offset="1" stop-color="white" stop-opacity="0"/>
            											</linearGradient>
            										</defs>
            									</svg>
            									<div class="ml-3">
            										<p class="text-warning fs-20 mb-0">+

            											<?php
            											require("../conexion_/conexion.php");
            											$user = mysqli_query($mysqli,"SELECT COUNT(*) AS usuarios FROM usuarios WHERE rol='2'");
            											$user_ = mysqli_fetch_array($user);
            											echo $user_['usuarios']/2;
            											?>


            										%</p>
            										<span class="fs-12">Ultimos dias</span>
            									</div>
            								</div>
            							</div>
            							<div class="progress mt-3 mb-4" style="height:15px;">
            								<div class="progress-bar-striped progress-bar-animated" style="width: 100%; height:15px;" role="progressbar">
            									<span class="sr-only">100% Complete</span>
            								</div>
            							</div>
            							<p class="fs-12">Total de usuarios registrados en la plataforma LATIN CLUB 2021</p>
            							<a href="usuarios" class="text-white">Vista de usuarios<i class="las la-long-arrow-alt-right scale5 ml-3"></i></a>
            						</div>
            					</div>
            				</div>
            				<div class="col-xl-6 col-xxl-7 col-lg-6">
            					<div class="row">
            						<div class="col-sm-12">
            							<div class="card overflow-hidden">
            								<br>
            								<div class="card-header align-items-start pb-0 border-0">	
            									<div>
            										<h4 class="fs-16 mb-0">$ 

            											<?php
            											require("../conexion_/conexion.php");
            											$historial = mysqli_query($mysqli,"SELECT SUM(precio) AS ventas_hoy FROM historial");
            											$historial_ = mysqli_fetch_array($historial);
            											echo $historial_['ventas_hoy'];
            											?>


            										USD</h4>
            										<span class="fs-12">Ventas totales <?php echo date('Y')?></span>
            									</div>
            								</div>
            								<br><br>
            							</div>
            						</div>

            						<div class="col-sm-6">
            							<div class="card overflow-hidden">
            								<br>
            								<div class="card-header align-items-start pb-0 border-0">	
            									<div>
            										<h4 class="fs-16 mb-0">

            											<?php
            											require("../conexion_/conexion.php");
            											$salas = mysqli_query($mysqli,"SELECT COUNT(*) AS salas FROM salas WHERE estado='1' or estado='0'");
            											$salas_ = mysqli_fetch_array($salas);
            											echo $salas_['salas'];
            											?>


            										Remates activos</h4>
            										<span class="fs-12">Remates activos <?php echo date('d-m-Y')?></span>
            									</div>
            								</div>
            								<br><br>
            							</div>
            						</div>
            						<div class="col-sm-6">
            							<div class="card overflow-hidden">
            								<br>
            								<div class="card-header align-items-start pb-0 border-0">	
            									<div>
            										<h4 class="fs-16 mb-0">

            											<?php
            											require("../conexion_/conexion.php");
            											$salas = mysqli_query($mysqli,"SELECT COUNT(*) AS salas FROM salas WHERE estado='2'");
            											$salas_ = mysqli_fetch_array($salas);
            											echo $salas_['salas'];
            											?>

            										Remates finalizados</h4>
            										<span class="fs-12">Remates finalizados <?php echo date('d-m-Y')?></span>
            									</div>
            								</div>
            								<br><br>
            							</div>
            						</div>
            					</div>
            				</div>  			
            			</div>
            		</div>
            	</div>


            	<!--****** Footer ******-->
            	<?php include'include/footer.php'?>	
            	<!--****** Footer ******-->


            </div>


            <!--***** Scripts *****-->
            <script src="vendor/global/global.min.js"></script>
            <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
            <script src="js/custom.min.js"></script>
            <script src="vendor/chart.js/Chart.bundle.min.js"></script>
            <script src="js/deznav-init.js"></script>
            <script src="vendor/owl-carousel/owl.carousel.js"></script>
            <!--***** Scripts *****-->

        </body>
        </html>