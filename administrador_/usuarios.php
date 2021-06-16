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
	<link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
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


		<!--****Content*****-->
		<div class="content-body">
			<div class="container-fluid">
				<div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index">Inicio</a></li>
						<li class="breadcrumb-item active"><a href="usuarios">Usuarios</a></li>
					</ol>
				</div>
				<!-- row -->


				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Usuarios registrados</h4>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table id="example" class="display min-w850">
										<thead>
											<tr>
												<th>#</th>
												<th>Usuario</th>
												<th>Correo</th>
												<th>Saldo</th>
												<th>Estado</th>
												<th>Fecha registro</th>
												<th>Opciones</th>
											</tr>
										</thead>
										<tbody>

											<?php

											require("../conexion_/conexion.php");

											$usuarios="SELECT * FROM usuarios WHERE rol='2' ";
											$usuario_=mysqli_query($mysqli,$usuarios);

											while ($user=mysqli_fetch_row ($usuario_)){

												$id_usuario1 = $user[0];
												$nombre_apellido1 = $user[1];
												$email1 = $user[2];
												$usuario1 = $user[3];
												$clave1 = $user[4];
												$saldo1 = $user[5];
												$ip1 = $user[6];
												$fecha_registro1 = $user[7];
												$ultima_conexion1 = $user[8];
												$estado1 = $user[9];
												$rol1 = $user[10];

												echo 
												'
												<tr>
												<td>'.htmlentities($id_usuario1).'</td>
												<td>'.htmlentities($usuario1).'</td>
												<td>'.htmlentities($email1).'</td>
												<td>$ '.htmlentities($saldo1).'</td>
												';
												if($estado1==0){

													echo '<td><span class="badge light badge-success">Activo</span></td>';

												}else{

													echo '<td><span class="badge light badge-info">Inactivo</span></td>';
												}
												echo
												'
												<td>'.htmlentities($fecha_registro1).'</td>
												<td><a href="?user='.$id_usuario1.'"><button class="btn btn-success">Detalle</button></a></td>


												</tr>

												';
											}



											if(isset($_GET['user'])){


												$user_details=$_GET['user'];

												$usuarios2="SELECT * FROM usuarios WHERE id_usuario='$user_details'";
												$usuario2_=mysqli_query($mysqli,$usuarios2);


												while ($user2=mysqli_fetch_row ($usuario2_)){


													$id_usuario2 = $user2[0];
													$nombre_apellido2 = $user2[1];
													$email2 = $user2[2];
													$usuario2 = $user2[3];
													$clave2 = $user2[4];
													$saldo2 = $user2[5];
													$ip2 = $user2[6];
													$fecha_registro2 = $user2[7];
													$ultima_conexion2 = $user2[8];
													$estado2 = $user2[9];
													$rol2 = $user2[10];

												}


												echo 
												'
												<div class="modal fade" id="Modal">
												<div class="modal-dialog" role="document">
												<div class="modal-content">
												<div class="modal-header">
												<h5 class="modal-title">DETALLE DEL USUARIO</h5>
												<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
												</button>
												</div>
												<div class="modal-body">
												<form>
												<div class="form-row">
												<div class="form-group col-md-6">
												<label>Nombre y Apellido</label>
												<input type="text" value="'.htmlentities($nombre_apellido2).'" class="form-control" placeholder="Nombre y Apellido" readonly>
												</div>
												<div class="form-group col-md-6">
												<label>Email</label>
												<input type="email" value="'.htmlentities($email2).'" class="form-control" placeholder="Email" readonly>
												</div>
												<div class="form-group col-md-6">
												<label>Usuario</label>
												<input type="text" value="'.htmlentities($usuario2).'" class="form-control" placeholder="Usuario" readonly>
												</div>
												<div class="form-group col-md-6">
												<label>Contraseña</label>
												<input type="password" value="'.htmlentities($clave2).'" class="form-control" placeholder="Contraseña" readonly>
												</div>
												<div class="form-group col-md-6">
												<label>Saldo</label>
												<input type="text" value="$ '.htmlentities($saldo2).'" class="form-control" placeholder="Saldo" readonly>
												</div>
												<div class="form-group col-md-6">
												<label>Ip</label>
												<input type="text" value="'.htmlentities($ip2).'" class="form-control" placeholder="Ip" readonly>
												</div>
												<div class="form-group col-md-6">
												<label>Fecha de registro</label>
												<input type="text" value="'.htmlentities($fecha_registro2).'" class="form-control" placeholder="fecha de registro" readonly>
												</div>
												<div class="form-group col-md-6">
												<label>Ultima conexión</label>
												<input type="text" value="'.htmlentities($ultima_conexion2).'" class="form-control" placeholder="Ultima conexión" readonly>
												</div>
												</div>
												<center>
												';
												if($estado2==0){

													echo '<a href="validaciones_/_usuarios/usuarios-activo?id='.htmlentities($id_usuario2).'"><button type="button" class="btn btn-warning">Bloquear</button></a>';

												}else{

													echo '<a href="validaciones_/_usuarios/usuarios-inactivo?id='.htmlentities($id_usuario2).'"><button type="button" class="btn btn-primary">Desbloquear</button></a>';

												}

												echo'
												<a href="?money='.htmlentities($id_usuario2).'"><button type="button" class="btn btn-success">Dar saldo</button></a>
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
											}else if(isset($_GET['money'])){


												$user_details=$_GET['money'];

												$usuarios2="SELECT * FROM usuarios WHERE id_usuario='$user_details'";
												$usuario2_=mysqli_query($mysqli,$usuarios2);


												while ($user2=mysqli_fetch_row ($usuario2_)){


													$id_usuario2 = $user2[0];
													$nombre_apellido2 = $user2[1];
													$email2 = $user2[2];
													$usuario2 = $user2[3];
													$clave2 = $user2[4];
													$saldo2 = $user2[5];
													$ip2 = $user2[6];
													$fecha_registro2 = $user2[7];
													$ultima_conexion2 = $user2[8];
													$estado2 = $user2[9];
													$rol2 = $user2[10];

												}

												echo 
												'
												<div class="modal fade" id="Modal">
												<div class="modal-dialog" role="document">
												<div class="modal-content">
												<div class="modal-header">
												<h5 class="modal-title">CARGANDO SALDO AL '.htmlentities($nombre_apellido2).' </h5>
												<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
												</button>
												</div>
												<div class="modal-body">

												<div class="form-row">
												<div class="form-group col-md-6">
												<label>Nombre y Apellido</label>
												<input type="text" value="'.htmlentities($nombre_apellido2).'" class="form-control" placeholder="Nombre y Apellido" readonly>
												</div>
												<div class="form-group col-md-6">
												<label>Email</label>
												<input type="email" value="'.htmlentities($email2).'" class="form-control" placeholder="Email" readonly>
												</div>
												<div class="form-group col-md-12">
												<label>Saldo actual:</label>
												<input type="text" value="$ '.htmlentities($saldo2).'" class="form-control" placeholder="Saldo" readonly>
												</div>

												<form method="POST">
												<div class="form-group col-md-12">
												<label>Ingresa el saldo a agregar a esta cuenta:</label>
												<input type="text" id="id_usuario" value="'.htmlentities($id_usuario2).'" name="id_usuario" class="form-control" style="display: none;">
												<input type="text" id="saldo" name="saldo" class="form-control" placeholder="Ingresa el saldo a cargar ">
												</div>

												<div class="form-group col-md-12">
												<button type="button" id="saldo-agregar" class="btn btn-primary btn-block">GUARDAR</button>
												</div>

												</div>

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
		<!--*****Content*****-->


		<!--****** Footer ******-->
		<?php include'include/footer.php'?>	
		<!--****** Footer ******-->



	</div>


	<!--*******Scripts*******-->
	<script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
	<script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
	<script src="js/plugins-init/datatables.init.js"></script>
	<script src="js/sweetalert2.min.js"></script>
	<script src="validaciones_/_saldo/js/saldo-agregar.js"></script>
	<!--*******Scripts*******-->

</body>
</html>