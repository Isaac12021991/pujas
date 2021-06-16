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

	<title>LATIN CLUB</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">
</head>

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

						<div class="row" id="salas_actualizadas">

							<!-----------SALAS EN TIEMPO REAL------------>
							<!-----------SALAS EN TIEMPO REAL------------>

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
	<script src="validaciones_/js/actualizar_precio.js"></script>
	<script src="validaciones_/js/actualizar_salas.js"></script>
	<!-- ================================================== -->

</body>
</html>
