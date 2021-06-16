<?php 

require("../conexion_/conexion.php");

$xCBcDeFGHyYAcSDgSADcNfsaGYRsdSdSDSAeDSVVVsSAKIh=$_GET['xCBcDeFGHyYAcSDgSADcNfsaGYRsdSdSDSAeDSVVVsSAKIh'];


$validaciones=mysqli_query($mysqli,"SELECT * FROM usuarios where estado='3' and clave='$xCBcDeFGHyYAcSDgSADcNfsaGYRsdSdSDSAeDSVVVsSAKIh'");
$validacion=mysqli_num_rows($validaciones);

if($validacion>0 ){

	?>


	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta name="author" content="">
		<meta name="description" content="">
		<meta http-equiv="Content-Type"content="text/html;charset=UTF-8"/>
		<meta name="viewport"content="width=device-width, initial-scale=1.0">
		<title>LATIN CLUB | Tu mejor opción para apostar ONLINE</title>
		<link rel="shortcut icon" href="../img/favicon.png" />
		<link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">
		<link href="../assets/plugins/icons/css/icons.css" rel="stylesheet">
		<link href="../assets/plugins/animate/animate.css" rel="stylesheet">
		<link href="../assets/plugins/aos-master/aos.css" rel="stylesheet">
		<link href="../assets/plugins/bootstrap/css/bootsnav.css" rel="stylesheet">
		<link href="../assets/css/style.css" rel="stylesheet">
		<link href="../css/style.css" rel="stylesheet">
		<link href="../assets/css/responsive.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&amp;display=swap" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600&amp;display=swap" rel="stylesheet"> 
		<link href="../css/sweetalert2.min.css" rel="stylesheet" type="text/css">
	</head>

	<body oncontextmenu="return false" >

		<div class="page_preloader"></div>

		<!-- ======================= Title ===================== -->
		<div class="page-title">
			<div class="container">
				<div class="page-caption">
					<h2>RESTABLECER CONTRASEÑA</h2>
					<p><a href="index">Inicio</a> <i class="ti-angle-double-right"></i> RECUPERAR CLAVE</p>
				</div>
			</div>
		</div>
		<!-- ======================= Title ===================== --> 


		<!-- ======================= contacto ===================== -->
		<section class="padd-top-80 padd-bot-80">
			<div class="container"> 
				<div class="row">
					<div class="tab-content"> 

						<div class="container"> 
							<div class="row">

								<div class="col-md-2">
								</div>

								<div class="col-md-8">
									<?php 

									$xCBcDeFGHyYAcSDgSADcNfsaGYRsdSdSDSAeDSVVVsSAKIh=$_GET['xCBcDeFGHyYAcSDgSADcNfsaGYRsdSdSDSAeDSVVVsSAKIh'];

									?>
									<center>
										<form action="recover-true-true?xCBcDeFGHyYAcSDgSADcNfsaGYRsdSdSDSAeDSVVVsSAKIh=<?php echo $_GET['xCBcDeFGHyYAcSDgSADcNfsaGYRsdSdSDSAeDSVVVsSAKIh'];?>" method="post">
											<div class="form-group col-md-6">
												<label>Nueva contraseña<span class="required">*</span></label>
												<br>
												<input type="text" name="clave_usuario" placeholder="Nueva contraseña" required>
											</div>
											<div class="form-group col-md-6">
												<label>Repetir contraseña<span class="required">*</span></label>
												<br>
												<input type="text" name="rclave_usuario" placeholder="Repetir la nueva contraseña" required>
											</div>
											<div class="form-group text-center">
												<button type="submit"  class="btn theme-btn full-width btn-m">Guardar</button>
											</div>
										</form>
									</center>
								</div>

								<div class="col-md-2">
								</div>

							</div>	     
						</div>
					</div>


				</div>   
			</div>
		</section>
		<!-- ======================= contacto ===================== -->


		<div><a href="#" class="scrollup">Scroll</a></div>

		<script src="../assets/js/jquery.min.js"></script> 
		<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
		<script src="../assets/plugins/bootstrap/js/bootsnav.js"></script> 
		<script src="../assets/js/viewportchecker.js"></script> 
		<script src="../assets/js/slick.js"></script> 
		<script src="../assets/plugins/bootstrap/js/bootstrap-wysihtml5.js"></script> 
		<script src="../assets/plugins/aos-master/aos.js"></script> 
		<script src="../assets/plugins/nice-select/js/jquery.nice-select.min.js"></script> 
		<script src="../assets/js/custom.js"></script> 
		<script src="../js/sweetalert2.min.js"></script>
		<script src="../restablecer_/js/recover.js"></script>
		<script src="../validaciones_/js/login.js"></script>
		<script src="../validaciones_/js/sign_up.js"></script>  
		<script src="../validaciones_/js/boletines.js"></script>
		<script>
			$(window).load(function() {
				$(".page_preloader").fadeOut("slow");;
			});
			AOS.init();
		</script>
	</body>

	</html>

	<?php 

}else{

	echo "<script>location.href='http://subastahipica.com/index?to=economic'</script>";      

}

?>