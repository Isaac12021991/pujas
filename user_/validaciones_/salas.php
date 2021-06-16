	<?php

	require("../../conexion_/conexion.php");


	$salas="SELECT * FROM salas WHERE estado='0' LIMIT 1 ";
	$salas_=mysqli_query($mysqli,$salas);

	$result2 = 0;
	$result2 = mysqli_num_rows($salas_);
	if ($result2 > 0) {

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

	}else{

		$id_sala_ = '0';
		$numero_sala = '0';
		$tipo_remate = 'Ninguno';
		$hipodromo = 'Proximamente';
		$distancia = '0';
		$estado = '2';

	}


	?>


<!------------------------------------------------->
<div class="col-md-12" style="margin-bottom: 30px;">

	<div class="card">
		<div class="card-header" style="background-color: #456176; color: white;">
			<h5>PRÓXIMA CARRERA HOY</h5>
		</div>
		<ul class="list-group list-group-flush">

			<div class="row">

				<div class="col-md-6">
					<br>
					<h1><?php echo $hipodromo ?><br></h1>
					<h4>Carrera Nro. <?php echo $numero_sala ?> (<?php echo $distancia ?> Mts.)</h4>
				</div>

				<div class="col-md-6">
					<br>
					<h1>#<?php echo $numero_sala ?></h1>
					<?php 



					$query2 = mysqli_query($mysqli, "SELECT * FROM tablas WHERE id_sala='$id_sala_' and numero_tabla='14'");
					$data2 = mysqli_fetch_array($query2);

					$result = 0;
					$result = mysqli_num_rows($query2);
					if ($result > 0) {

						if($data2['estado']==0){

							echo '<button class="btn btn-danger">CARRERA FINALIZADA</button>';	

						}else if($data2['estado']==2){

							echo '<a href="sala?from='.htmlentities($id_sala_).'"><button class="btn btn-danger">JUGAR</button></a>';

						}

					}else{

						echo '<button class="btn btn-danger">MUY PRONTO</button>';	

					}


					?>
				</div>

			</div>

			<hr>

		</ul>
	</div>

</div>
<!------------------------------------------------->


<!------------------------------------------------->
<div class="col-md-12" style="margin-bottom: 30px;">

	<div class="card">
		<div class="card-header" style="background-color: #456176; color: white;">
			<h5>PRÓXIMAS CARRERAS</h5>
		</div>
		<ul class="list-group list-group-flush">

			<div class="row">

				<div class="col-md-12">
					<div class="row">

						<?php



						extract($_GET);
						require("../../conexion_/conexion.php");

						$salas="SELECT * FROM salas WHERE estado='1'";
						$salas_=mysqli_query($mysqli,$salas);

						$result = 0;
						$result = mysqli_num_rows($salas_);
						if ($result > 0) {

							while ($sala=mysqli_fetch_row ($salas_)){

								$numero_sala = $sala[1];
								$hipodromo = $sala[5];

								echo '
								<div class="col-md-4">
								<br>
								<h6>'.$hipodromo.'<br></h6>
								<h6>Carrera Nro. '.$numero_sala.'</h6>
								</div>
								';

							}

						}else{

							echo '
							<div class="col-md-4">
							<br>
							<h6>PROXIMAMENTE<br></h6>
							<h6><img src="img/calendario.png" width="20"> **-**-****</h6>
							</div>
							';

						}

						?>

					</div>
				</div>


			</div>

			<hr>

		</ul>
	</div>

</div>
<!------------------------------------------------->


<!------------------------------------------------->
<div class="col-md-12" style="margin-bottom: 30px;">

	<div class="card">

		<div class="card-header" style="background-color: #456176; color: white;">
			<div class="col-md-9">
				<h5>HORARIOS DE ATENCIÓN</h5>
			</div>
			<div class="col-md-3"></div>	
		</div>

		<ul class="list-group list-group-flush">
			<div class="row">

				<div class="col-md-9">
					<br>
					<b>Lunes - Miércoles - Jueves</b>
					<br>
					Se realizan 3 revisiones para validar abonos 9am / 3pm / 7pm. Siendo esta última el horario para procesar retiros.
					<br>
					<b>Martes NO LABORAL</b>
					<br>
					Viernes - Sábado - Domingo
					<br>
					Comenzamos desde las 9am hasta 2 horas después de las carreras.
					<br>
					<b>Por motivos de auditoría los retiros solicitados los días domingos, se procesarán el lunes siguiente.</b>

				</div>

				<div class="col-md-1">

				</div>

				<div class="col-md-2">
					<br>
					<br>
					<img src="img/reloj.png" width="70">
				</div>

			</div>

			<hr>

		</ul>
	</div>

</div>
							<!------------------------------------------------->