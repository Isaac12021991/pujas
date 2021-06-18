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
    <link href="../css/sweetalert2.min.css" rel="stylesheet" type="text/css">

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



	<?php

	$id_user=$_SESSION['id_usuario'];

	require("../conexion_/conexion.php");

	$usuarios="SELECT * FROM usuarios WHERE id_usuario='$id_user' ";
	$user_=mysqli_query($mysqli,$usuarios);

	$result = 0;
	$result = mysqli_num_rows($user_);
	if ($result > 0) {

		while ($user=mysqli_fetch_row($user_)){

			$id_usuario=$user[0];
			$nombre_apellido=$user[1];
			$email=$user[2];
			$usuario=$user[3];
			$clave=$user[4];
			$saldo=$user[5];
			$ip=$user[6];
			$fecha_registro=$user[7];
			$ultima_conexion=$user[8];
			$estado=$user[9];
		}

	}else{


	}

	?>

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
										<h5>MIS JUGADAS</h5>
									</div>
									<ul class="list-group list-group-flush">

										<div class="container">

											<div class="row">

												<div class="col-md-5"><br>
													<div class="card text-white bg-dark mb-3">
														<div class="card-header"><b>OPCIONES</b></div>
														<div class="card-body">
															<div class="row">
																<div class="col-md-12">
																	<a class="nav-link btn btn-success text-uppercase" style=" background-color: #072B00; border-radius: 10px; color: #D6A602;"><center><h5>CUENTA #<?php echo $id_usuario ?></h5></center></a>

																	<hr>

																	<a type="button" class="nav-link btn btn-success text-uppercase" style=" background-color: #072B00; border-radius: 10px; color: #D6A602;" href="perfil"><center>MI PERFIL</center></a>

																	<hr>

																	<a type="button" class="nav-link btn btn-success text-uppercase" style=" background-color: #072B00; border-radius: 10px; color: #D6A602;" href="mis-jugadas"><center>VER MIS JUGADAS</center></a>

																	<hr>

																	<a type="button" class="nav-link btn btn-success text-uppercase" style=" background-color: #072B00; border-radius: 10px; color: #D6A602;" data-toggle="modal" data-target="#Modal"><center>CAMBIAR CONTRASEÑA</center></a>


																	<div class="modal fade" id="Modal">
																		<div class="modal-dialog" role="document">
																			<div class="modal-content">
																				<div class="modal-header">
																					<h6 class="modal-title"><font color="black">CAMBIAR CONTRASEÑA</font></h6>
																					<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
																					</button>
																				</div>
																				<div class="modal-body">

																					<script>
																						function mostrarContrasena1(){
																							var tipo1 = document.getElementById("clave_actual");
																							if(tipo1.type == "password"){
																								tipo1.type = "text";
																							}else{
																								tipo1.type = "password";
																							}
																						}

																						function mostrarContrasena2(){
																							var tipo2 = document.getElementById("clave_nueva");
																							if(tipo2.type == "password"){
																								tipo2.type = "text";
																							}else{
																								tipo2.type = "password";
																							}
																						}


																						function mostrarContrasena3(){
																							var tipo3 = document.getElementById("clave_nueva_r");
																							if(tipo3.type == "password"){
																								tipo3.type = "text";
																							}else{
																								tipo3.type = "password";
																							}
																						}

																					</script>


																					<form method="POST">
																						<div class="form-row">
																							<div class="form-group col-md-7">
																								<input type="password" class="form-control" name="clave_actual" id="clave_actual" placeholder="Contraseña actual">
																							</div>
																							<div class="form-group col-md-5">
																								<button class="btn btn-info" type="button" onclick="mostrarContrasena1()">Mostrar Contraseña</button>
																							</div>
																						</div>
																						<div class="form-row">
																							<div class="form-group col-md-7">
																								<input type="password" class="form-control" name="clave_nueva" id="clave_nueva" placeholder="Contraseña nueva" required="">
																							</div>
																							<div class="form-group col-md-5">
																								<button class="btn btn-info" type="button" onclick="mostrarContrasena2()">Mostrar Contraseña</button>
																							</div>
																						</div>
																						<div class="form-row">
																							<div class="form-group col-md-7">
																								<input type="password" class="form-control" name="clave_nueva_r" id="clave_nueva_r" placeholder="Repetir la contraseña nueva" required="">
																							</div>
																							<div class="form-group col-md-5">
																								<button class="btn btn-info" type="button" onclick="mostrarContrasena3()">Mostrar Contraseña</button>
																							</div>
																						</div>
																						<center>
																							<button type="button" id="actualizar-clave" class="btn btn-success btn-block">Cambiar</button>
																						</center>
																					</form>
																				</div>
																				<div class="modal-footer">
																					<button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>
																				</div>
																			</div>
																		</div>
																	</div>

																</div>

															</div>
														</div>
													</div>
												</div>

												<div class="col-md-7"><br>
													<div class="card text-white bg-info mb-3">
														<div class="card-header"><b>MIS JUGADAS</b></div>
														<div class="card-body">

															<table class="table">
																<thead class="thead-dark">
																	<tr>
																		<th scope="col">Id</th>
																		<th scope="col">Carre</th>
																		<th scope="col">Apuet</th>
																		<th scope="col">Ganado</th>
																	</tr>
																</thead>
																<tbody>


																	<?php

																	require("../conexion_/conexion.php");

																	$jugadas="SELECT historial.*, ganadores.primer_lugar, ganadores.pago_primer_lugar FROM historial left join ganadores on ganadores.id_sala = historial.id_sala WHERE historial.id_usuario='$id_user'";
																	$jugadas_=mysqli_query($mysqli,$jugadas);

																	$result = 0;
																	$result = mysqli_num_rows($jugadas_);
																	if ($result > 0) {

																		while ($jugad=mysqli_fetch_row ($jugadas_)){

																			$id_tabla  = $jugad[0];
																			$numero_tabla = $jugad[1];
																			$id_sala = $jugad[2];
                                                                            $id_user_ = $jugad[3];
                                                                            $nombre_ejemplar = $jugad[4];
																			$precio = $jugad[6];
																			
																			$estado = $jugad[8];
																			if ($numero_tabla == $jugad[9]):
																				$ganado = $jugad[10];
																			else:
																				$ganado = '0';
																			endif;

																			echo
																			'
																			<tr>
																			<td>'.htmlentities($id_tabla).'</td>
																			<td>'.htmlentities($id_sala).'</td>
																			<td>$'.htmlentities($precio).'</td>
																			<td>$'.htmlentities($ganado).'</td>
																			</tr>

																			';
																		}

																	}else{

																		echo "<tr><center>*** NO TIENES JUGADAS REGISTRADAS ***</center></tr>";

																	}


																	?>

																</tbody>
															</table>

														</div>
													</div>


												</div>

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
	<script src="../js/sweetalert2.min.js"></script>
	<script src="validaciones_/js/actualizar_precio.js"></script>
	<script type="text/javascript" src="validaciones_/_perfil/js/clave-editar.js"></script>
	<script type="text/javascript" src="validaciones_/_perfil/js/perfil-editar.js"></script>
	<!-- ================================================== -->

</body>
</html>
