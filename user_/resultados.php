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
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<title>LATIN CLUB</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">
</head>

<script type="text/javascript">
	
	$( document ).ready(function() {
		$('#Modal').modal('toggle')
	});

</script>

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

						<div class="row">

							<!------------------------------------------------->
							<div class="col-md-12" style="margin-bottom: 30px;">

								<div class="card">
									<div class="card-header" style="background-color: #456176; color: white;">
										<h5>RESULTADOS</h5>
									</div>
									<ul class="list-group list-group-flush">

										<div class="container">

											<div class="row">

												<?php

												require("../conexion_/conexion.php");

												$ganadores="SELECT * FROM ganadores";
												$ganadores_=mysqli_query($mysqli,$ganadores);

												while ($gana=mysqli_fetch_row ($ganadores_)){

													$id_ganador = $gana[0];
													$id_sala = $gana[1];
													$primer_lugar = $gana[2];
													$segundo_lugar = $gana[3];
													$tercer_lugar = $gana[4];
													$fecha = $gana[5];

													$query = mysqli_query($mysqli, "SELECT * FROM salas WHERE id_sala='$id_sala' ");
													$data = mysqli_fetch_array($query);

													$numero_sala=$data['numero_sala'];
													$tipo_remate=$data['tipo_remate'];	
													$hipodromo=$data['hipodromo'];
													$distancia=$data['distancia']; 


													$query2 = mysqli_query($mysqli, "SELECT * FROM historial WHERE numero_tabla='$primer_lugar' and id_sala='$id_sala'");
													$data2 = mysqli_fetch_array($query2);

													$cliente=$data2['cliente'];
													$precio=$data2['precio'];
													$total_recogido=$data2['total_recogido'];


													$query3 = mysqli_query($mysqli, "SELECT * FROM ganadores WHERE id_sala='$id_sala'");
													$data3 = mysqli_fetch_array($query3);

													$primer_lugar_caballo=$data3['primer_lugar'];
													$total_pago_cliente=$data3['pago_primer_lugar'];

													echo 
													'
													<div class="col-md-4"><br>
													<div class="card text-white bg-success mb-3">
													<div class="card-header"><b>CARRERA #'.htmlentities($numero_sala).'</b></div>
													<div class="card-body">
													<b>Remate:</b> '.htmlentities($tipo_remate).'
													<br>
													<b>Hipodromo:</b> '.htmlentities($hipodromo).'
													<br>
													<b>Distancia:</b> '.htmlentities($distancia).' mts
													<hr>
													<b>Caballo ganador:</b> #'.htmlentities($primer_lugar_caballo).'	
													<br>
													<b>Cliente ganador:</b> '.htmlentities($cliente).'
													<br>
													<b>Saldo ganado:</b> $'.htmlentities($total_pago_cliente).' USD
													</div>
													</div>
													</div>
													';
												}

												?>



											</div>

										</div>

										<hr>

									</ul>
								</div>

							</div>
							<!------------------------------------------------->

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
	<!-- ================================================== -->

</body>
</html>
