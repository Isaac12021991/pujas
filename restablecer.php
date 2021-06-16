<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
	<meta name="author" content="">
	<meta name="description" content="">
	<meta http-equiv="Content-Type"content="text/html;charset=UTF-8"/>
	<meta name="viewport"content="width=device-width, initial-scale=1.0">
	<title>LATIN CLUB | Tu mejor opción para apostar ONLINE</title>
	<link rel="shortcut icon" href="img/favicon.png" />
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
	<link href="assets/plugins/icons/css/icons.css" rel="stylesheet">
	<link href="assets/plugins/animate/animate.css" rel="stylesheet">
	<link href="assets/plugins/aos-master/aos.css" rel="stylesheet">
	<link href="assets/plugins/bootstrap/css/bootsnav.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="assets/css/responsive.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&amp;display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600&amp;display=swap" rel="stylesheet"> 
	<link href="css/sweetalert2.min.css" rel="stylesheet" type="text/css">
</head>


<body class="utf_skin_area">

	<div class="page_preloader"></div>

	<!-- ========================== --> 
	<?php include'include/header.php'?>
	<!-- ========================== --> 

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
							<div class="col-md-12 col-sm-12">
								<form method="POST">
									<div class="form-group">
										<label>Email</label>
										<input type="text" id="correo" name="correo" class="form-control" placeholder="Ingresa tu email">
									</div>
									<div class="form-group text-center">
										<button type="button" id="recover" class="btn theme-btn full-width btn-m">Verificar</button>


										<script type="text/javascript">
											var boton = document.getElementById('recover');
											boton.addEventListener("click", bloquea, false); 

											function bloquea(){
												if(boton.disabled == false){
													boton.disabled = true;

													setTimeout(function(){
														boton.disabled = false;
													}, 10000)
												}
											}
										</script>
									</div>
								</form>
							</div>	     
						</div>
					</div>


				</div>
			</div>   
		</div>
	</section>
	<!-- ======================= contacto ===================== -->



	<!-- ============================================= --> 
	<?php include'include/suscribete.php'?>
	<!-- ============================================= --> 



	<!-- ============================================= --> 
	<?php include'include/footer.php'?>
	<!-- ============================================= --> 


	<div><a href="#" class="scrollup">Scroll</a></div>

	<script src="assets/js/jquery.min.js"></script> 
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
	<script src="assets/plugins/bootstrap/js/bootsnav.js"></script> 
	<script src="assets/js/viewportchecker.js"></script> 
	<script src="assets/js/slick.js"></script> 
	<script src="assets/plugins/bootstrap/js/bootstrap-wysihtml5.js"></script> 
	<script src="assets/plugins/aos-master/aos.js"></script> 
	<script src="assets/plugins/nice-select/js/jquery.nice-select.min.js"></script> 
	<script src="assets/js/custom.js"></script> 
	<script src="js/sweetalert2.min.js"></script>
	<script src="restablecer_/js/recover.js"></script>
	<script src="validaciones_/js/login.js"></script>
	<script src="validaciones_/js/sign_up.js"></script>  
	<script src="validaciones_/js/boletines.js"></script>
	<script>
		$(window).load(function() {
			$(".page_preloader").fadeOut("slow");;
		});
		AOS.init();
	</script>
</body>
</html>