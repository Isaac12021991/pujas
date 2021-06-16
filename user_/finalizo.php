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
	<link href="../css/sweetalert2.min.css" rel="stylesheet" type="text/css">
</head>

<body style="background-color: #072B00;">

	<!-- ================================================== -->
	<?php include'include/header.php'?>
	<!-- ================================================== -->

	<br>


	<?php 

	require("../conexion_/conexion.php");

	$id_sala=$_GET['from'];

	if($id_sala==0){

		echo'
		<script>
		function redireccionarPagina() {
			window.location = "index";
		}
		setTimeout("redireccionarPagina()");
		</script>
		';
		
	}else{

		$salas="SELECT * FROM salas WHERE id_sala='$id_sala'";
		$salas_=mysqli_query($mysqli,$salas);


		while ($sala=mysqli_fetch_row ($salas_)){

			$id_sala_ = $sala[0];
			$numero_sala = $sala[1];
			$tipo_remate = $sala[2];
			$anuncio1 = $sala[3];
			$anuncio2 = $sala[4];
			$hipodromo = $sala[5];
			$distancia = $sala[6];
			$pote_tablazo = $sala[7];
			$pote = $sala[8];
			$estado = $sala[9];


		}


		$tablas="SELECT * FROM historial WHERE id_sala='$id_sala_'";
		$tablas_=mysqli_query($mysqli,$tablas);

		$result2 = 0;
		$result2 = mysqli_num_rows($tablas_);
		if ($result2 > 0) {

			while ($tabla=mysqli_fetch_row ($tablas_)){

				$id_tabla  = $tabla[0];
				$numero_tabla = $tabla[1];
				$id_sala = $tabla[2];
				$id_usuario = $tabla[3];
				$cliente = $tabla[4];
				$precio = $tabla[5];

			}

		}else{

			echo'
			<script>
			function redireccionarPagina() {
				window.location = "index";
			}
			setTimeout("redireccionarPagina()");
			</script>
			';

		}


		$reglas_="SELECT * FROM reglas_sala ";
		$reglas=mysqli_query($mysqli,$reglas_);

		$result3 = 0;
		$result3 = mysqli_num_rows($reglas);
		if ($result3 > 0) {

			while ($sala=mysqli_fetch_row($reglas)){

				$id_regla=$sala[0];
				$campo1=$sala[1]; 
				$campo2=$sala[2];
				$campo3=$sala[3]; 
				$campo4=$sala[4];
				$campo5=$sala[5]; 
				$campo6=$sala[6];

			}

		}else{


		}

	}

	?>

	<!-- ================================================== -->
	<div class="container h-100">
		<div class="row justify-content-center h-100">
			<div class="col-sm-8 align-self-center text-center">
				<div class="card shadow">
					<div class="card-body color-verde">  

						<div class="row">
							<div class="col-md-12">
								<h2 class="m-1 text-naranja">REMATE <?php echo $tipo_remate ?></h2> 
							</div>
						</div>

						<div class="row">

							<div class="col-md-12">

								<table class="table table-bordered contenedores_1">
									<thead class="text-negro">
										<tr>
											<th style="border: black 1px solid;"><?php echo nl2br($hipodromo) ?></th>
											<th style="border: black 1px solid;"><marquee><?php echo nl2br($anuncio1) ?></marquee></th>
											<th style="border: black 1px solid;">
												<?php 
												date_default_timezone_set('America/Caracas'); 
												echo date('Y-m-d');
												?>
											</th>
										</tr>
									</thead>
									<tbody class="text-negro">
										<tr>
											<td style="border: black 1px solid;"><?php echo nl2br($anuncio2) ?></td>
											<td style="border: black 1px solid;">Distancia - <?php echo nl2br($distancia) ?></td>
											<td style="border: black 1px solid;">
												<?php 
												date_default_timezone_set('America/Caracas'); 
												echo date('h:i a'); 
												?>
											</td>
										</tr>
									</tbody>
								</table>

							</div>

							<div class="col-md-12">

								<div class="row">

									<div class="col text-tabla">
										<div class="">
											REMATE FINALIZADO
										</div>
									</div>


								</div>

							</div>

							<div class="col">

								<table class="table table-bordered" id="finalizo">


								</table>

							</div>

						</div>


						<div class="row">


							<div class="col-md-12">

								<br>

								<div class="row" id="finalizo_total">



								</div>

							</div>

						</div>

						<div class="espacio"></div>

						<div class="row">

							<div class="col-md-12">

								<table class="table table-bordered contenedores_1">
									<thead class="text-negro">
										<tr>
											<th style="border: black 1px solid; font-size: 12px;"><?php echo nl2br($campo1) ?></th>
											<th style="border: black 1px solid; font-size: 12px;"><?php echo nl2br($campo3) ?></th>
											<th style="border: black 1px solid; font-size: 12px;"><?php echo nl2br($campo5) ?></th>
										</tr>
									</thead>
									<tbody class="text-negro">
										<tr>
											<th style="border: black 1px solid; font-size: 12px;"><?php echo nl2br($campo2) ?></th>
											<th style="border: black 1px solid; font-size: 12px;"><?php echo nl2br($campo4) ?></th>
											<th style="border: black 1px solid; font-size: 12px;"><?php echo nl2br($campo6) ?></th>
										</tr>
									</tbody>
								</table>

							</div>

						</div>

						<br><br>

					</div>
				</div>
			</div>
		</div>
	</div>  
	<!-- ================================================== -->

	<div id="tiempo_servidor"></div>

	<!-- ================================================== -->
	<?php include'include/footer.php'?>
	<!-- ================================================== -->

	<!-- ================================================== -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/vendor/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="../js/sweetalert2.min.js"></script>
	<script src="validaciones_/_pujas/js/pujar.js"></script>
	<script src="validaciones_/js/actualizar_tablas.js"></script>
	<script src="validaciones_/js/actualizar_precio.js"></script>

	<!-- ================================================== -->
	<script src="validaciones_/js/tiempo_servidor_ejecutable.js"></script>
	<!-- ================================================== -->

</body>
</html>
