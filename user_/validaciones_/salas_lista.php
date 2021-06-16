<?php


extract($_GET);
require("../../conexion_/conexion.php");

$sql="SELECT * FROM salas WHERE estado=0";
$ressql=mysqli_query($mysqli,$sql);

$result = 0;
$result = mysqli_num_rows($ressql);
if ($result > 0) {

	while ($row=mysqli_fetch_row ($ressql)){


		$id_sala = $row[0];
		$numero_sala = $row[1];
		$tipo_remate = $row[2];
		$hipodromo = $row[5];
		$fecha = $row[7];

		date_default_timezone_set('America/Caracas');
		$fecha_actual= date('Y-m-d h:i:s a');

		echo '
		<div class="col-md-4" style="margin-bottom: 30px;">
		<div class="card">
		<center><img class="card-img-top" src="img/caballo.png" alt="Card image cap"></center>
		<div class="card-body">
		<h5 class="card-title">CARRERA #'.htmlentities($numero_sala).'</h5>
		<p class="card-text text-uppercase">'.htmlentities($tipo_remate).'</p>
		';


		$query2 = mysqli_query($mysqli, "SELECT * FROM tablas WHERE id_sala='$id_sala' and numero_tabla='14'");
		$data2 = mysqli_fetch_array($query2);

		if($data2['estado']==0){

			echo '<button class="btn btn-danger">CARRERA FINALIZADA</button>';	

		}else if($data2['estado']==2){

			echo '<a href="sala?from='.htmlentities($id_sala).'" class="btn btn-warning boton-ingresar-sala">INGRESAR AL REMATE</a>';

		}

		echo'
		</div>
		</div>
		</div>
		';

	}

}else{

	echo '
	<div class="col-md-12" style="margin-bottom: 30px;">
	<div class="card">
	<div class="card-body">

	<center>NO HAY SALAS DISPONIBLES</center>

	</div>
	</div>
	</div>
	';

}

?>