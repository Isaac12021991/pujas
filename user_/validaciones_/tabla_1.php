<?php 

session_start();

require("../../conexion_/conexion.php");

$_SESSION['token'] = md5(session_id() . time());

$tablas="SELECT * FROM tablas WHERE numero_tabla='1' ";
$tablas_=mysqli_query($mysqli,$tablas);


while ($tabla=mysqli_fetch_row ($tablas_)){

	$id_sala_ = $tabla[2];

}


$finalizo="SELECT MAX(id_sala) FROM historial";
$final=mysqli_query($mysqli,$finalizo);
while ($fin=mysqli_fetch_row ($final)){
	$id_sala_max_ = $fin[0];
}


$sql="SELECT * FROM tablas";
$ressql=mysqli_query($mysqli,$sql);
$result = 0;
$result = mysqli_num_rows($ressql);
if ($result > 0) { while ($row=mysqli_fetch_row ($ressql)){ $po = $row[0]; } }

else{ 
	echo'
	<script>
	function redireccionarPagina() {
		window.location = "finalizo?from='.htmlentities($id_sala_max_).'";
	}
	setTimeout("redireccionarPagina()");
	</script>
	'; 
}

?>



<thead class="text-negro contenedores_1">
	<tr class="text-negro">
		<th style="border: black 1px solid;">#</th>
		<th style="border: black 1px solid;">EJEMPLAR</th>
		<th style="border: black 1px solid;">CLIENTE</th>
		<th style="border: black 1px solid;">PRECIO</th>
		<th style="border: black 1px solid;">PUJAR</th>
	</tr>
</thead>
<tbody class="text-negro2 contenedores_2">
	<tr>
		<?php 
		$r = mysqli_query($mysqli, "SELECT * FROM tablas left join salas on salas.id_sala = tablas.id_sala WHERE tablas.id_sala='$id_sala_' and numero_tabla='1'");
		$f = mysqli_fetch_assoc($r);
		if($f){

			if($f['nombre_ejemplar']=='0'){


			}else{

				$fecha_activacion_time = strtotime($f['fecha_activacion']);
				$fecha_activacion_time + 900;
				if(time() > $fecha_activacion_time){ $in_agotado = 1; }else{ $in_agotado = 0;}

				echo 
				'
				<td style="border: black 1px solid; background-color: #F10303; color: white; "><b>1</b></td>
				<td style="border: black 1px solid;">'.htmlentities($f['nombre_ejemplar']).'</td>
				<td style="border: black 1px solid;"><font color="00BD0B">'.htmlentities($f['cliente']).'</font></td>
				<td style="border: black 1px solid; font-size: 18px; "><font face="Rockwell"><b>$ '.htmlentities($f['precio']).'</b></font> </td>


				<td style="border: black 1px solid;">
				<center>
				<input type="text" id="id_usuario" value="'.$_SESSION['id_usuario'].'" style="display: none;">
				<input type="hidden" id="token" value="'.$_SESSION['token'].'" />
				<input type="text" id="id_sala" value="'.$id_sala_.'" style="display: none;">
				<input type="text" id="num_tabla1" value="1" style="display: none;">
				';

				if($f['in_activo'] == 1){

				if($in_agotado == 0){
			
				if($f['id_usuario']!=$_SESSION['id_usuario']){

					$tiempo_1="SELECT * FROM historial_tiempo WHERE id_sala='$id_sala_' and id_tabla='1'";
					$estimado1=mysqli_query($mysqli,$tiempo_1);
					$f1 = mysqli_fetch_assoc($estimado1);
					date_default_timezone_set('America/Caracas'); 
					$fecha = date('H:i:s');
					$tiempo=$f1['tiempo'];
					if($tiempo<=$fecha){
						echo
						'
						<button type="button" id="pujar1" style="background-color: #FFFFFF; border: none;">
						<img src="img/puja.png" class="rounded-circle" alt="Eniun" width="50">
						</button>

						';
					}else{
						echo
						'
						<img src="img/cargando.gif" class="rounded-circle" alt="Eniun" width="50">
						';	
					}

				}else{

					echo
					'
	

					<button type="button" id="cancelar1" style="background-color: #FFFFFF; border: none;">
						Cancelar
						</button>
					';	
				}

			}else{ echo 'Agotado'; }

		}else{ echo 'Retirado'; }
			
				echo
				'
				</center>
				</td>
				';

			}

		}else{} 
		?>
	</tr>

	<tr>
		<?php 
		$r = mysqli_query($mysqli, "SELECT * FROM tablas left join salas on salas.id_sala = tablas.id_sala WHERE tablas.id_sala ='$id_sala_' and numero_tabla='2'");
		$f = mysqli_fetch_assoc($r);
		if($f){

			if($f['nombre_ejemplar']=='0'){


			}else{

				$fecha_activacion_time = strtotime($f['fecha_activacion']);
				$fecha_activacion_time + 900;
				if(time() > $fecha_activacion_time){ $in_agotado = 1; }else{ $in_agotado = 0;}


				echo
				'
				<td style="border: black 1px solid; background-color: #FFFFFF; color: black; "><b>2</b></td>
				<td style="border: black 1px solid;">'.htmlentities($f['nombre_ejemplar']).'</td>
				<td style="border: black 1px solid;"><font color="00BD0B">'.htmlentities($f['cliente']).'</font></td>
				<td style="border: black 1px solid; font-size: 18px; "><font face="Rockwell"><b>$ '.htmlentities($f['precio']).'</b></font> </td>

				<td style="border: black 1px solid;">
				<center>
				<input type="text" id="id_usuario" value="'.$_SESSION['id_usuario'].'" style="display: none;">
				<input type="hidden" id="token" value="'.$_SESSION['token'].'" />
				<input type="text" id="id_sala" value="'.$id_sala_.'" style="display: none;">
				<input type="text" id="num_tabla2" value="2" style="display: none;">
				';
				if($f['in_activo'] == 1){
				if($in_agotado == 0){
				if($f['id_usuario']!=$_SESSION['id_usuario']){

					$tiempo_2="SELECT * FROM historial_tiempo WHERE id_sala='$id_sala_' and id_tabla='2'";
					$estimado2=mysqli_query($mysqli,$tiempo_2);
					$f2 = mysqli_fetch_assoc($estimado2);
					date_default_timezone_set('America/Caracas'); 
					$fecha2 = date('H:i:s');
					$tiempo2=$f2['tiempo'];
					if($tiempo2<=$fecha2){
						echo
						'
						<button type="button" id="pujar2" style="background-color: #FFFFFF; border: none;">
						<img src="img/puja.png" class="rounded-circle" alt="Eniun" width="50">
						</button>
						';
					}else{
						echo
						'
						<img src="img/cargando.gif" class="rounded-circle" alt="Eniun" width="50">
						';	
					}

				}else{

					echo
					'
					<button type="button" id="cancelar2" style="background-color: #FFFFFF; border: none;">
						Cancelar
						</button>
					';	

				}

				}else{ echo 'Agotado'; }
				}else{ echo 'Retirado'; }
				echo
				'
				</center>
				</td>
				';

			}

		}else{} 
		?>
	</tr>

	<tr>
		<?php 
		$r = mysqli_query($mysqli, "SELECT * FROM tablas left join salas on salas.id_sala = tablas.id_sala WHERE tablas.id_sala='$id_sala_' and numero_tabla='3'");
		$f = mysqli_fetch_assoc($r);
		if($f){

			if($f['nombre_ejemplar']=='0'){


			}else{

				$fecha_activacion_time = strtotime($f['fecha_activacion']);
				$fecha_activacion_time + 900;
				if(time() > $fecha_activacion_time){ $in_agotado = 1; }else{ $in_agotado = 0;}

				echo
				'
				<td style="border: black 1px solid; background-color: #032FB0; color: white; "><b>3</b></td>
				<td style="border: black 1px solid;">'.htmlentities($f['nombre_ejemplar']).'</td>
				<td style="border: black 1px solid;"><font color="00BD0B">'.htmlentities($f['cliente']).'</font></td>
				<td style="border: black 1px solid; font-size: 18px; "><font face="Rockwell"><b>$ '.htmlentities($f['precio']).'</b></font> </td>

				<td style="border: black 1px solid;">
				<center>
				<input type="text" id="id_usuario" value="'.$_SESSION['id_usuario'].'" style="display: none;">
				<input type="hidden" id="token" value="'.$_SESSION['token'].'" />
				<input type="text" id="id_sala" value="'.$id_sala_.'" style="display: none;">
				<input type="text" id="num_tabla3" value="3" style="display: none;">
				';
				if($f['in_activo'] == 1){
				if($in_agotado == 0){
				if($f['id_usuario']!=$_SESSION['id_usuario']){

					$tiempo_3="SELECT * FROM historial_tiempo WHERE id_sala='$id_sala_' and id_tabla='3'";
					$estimado3=mysqli_query($mysqli,$tiempo_3);
					$f3 = mysqli_fetch_assoc($estimado3);
					date_default_timezone_set('America/Caracas'); 
					$fecha3 = date('H:i:s');
					$tiempo3=$f3['tiempo'];
					if($tiempo3<=$fecha3){
						echo
						'
						<button type="button" id="pujar3" style="background-color: #FFFFFF; border: none;">
						<img src="img/puja.png" class="rounded-circle" alt="Eniun" width="50">
						</button>
						';
					}else{
						echo
						'
						<img src="img/cargando.gif" class="rounded-circle" alt="Eniun" width="50">
						';	
					}

				}else{

					echo
					'
						<button type="button" id="cancelar3" style="background-color: #FFFFFF; border: none;">
						Cancelar
						</button>
					';

				}

				}else{ echo 'Agotado'; }
				}else{ echo 'Retirado'; }
				echo
				'
				</center>
				</td>
				';

			}

		}else{} 
		?>
	</tr>

	<tr>
		<?php 
		$r = mysqli_query($mysqli, "SELECT * FROM tablas left join salas on salas.id_sala = tablas.id_sala WHERE tablas.id_sala='$id_sala_' and numero_tabla='4'");
		$f = mysqli_fetch_assoc($r);
		if($f){

			if($f['nombre_ejemplar']=='0'){


			}else{

				$fecha_activacion_time = strtotime($f['fecha_activacion']);
				$fecha_activacion_time + 900;
				if(time() > $fecha_activacion_time){ $in_agotado = 1; }else{ $in_agotado = 0;}

				echo
				'
				<td style="border: black 1px solid; background-color: #F5F500; color: black; "><b>4</b></td>
				<td style="border: black 1px solid;">'.htmlentities($f['nombre_ejemplar']).'</td>
				<td style="border: black 1px solid;"><font color="00BD0B">'.htmlentities($f['cliente']).'</font></td>
				<td style="border: black 1px solid; font-size: 18px; "><font face="Rockwell"><b>$ '.htmlentities($f['precio']).'</b></font> </td>

				<td style="border: black 1px solid;">
				<center>
				<input type="text" id="id_usuario" value="'.$_SESSION['id_usuario'].'" style="display: none;">
				<input type="hidden" id="token" value="'.$_SESSION['token'].'" />
				<input type="text" id="id_sala" value="'.$id_sala_.'" style="display: none;">
				<input type="text" id="num_tabla4" value="4" style="display: none;">
				';
				if($f['in_activo'] == 1){
				if($in_agotado == 0){
				if($f['id_usuario']!=$_SESSION['id_usuario']){

					$tiempo_4="SELECT * FROM historial_tiempo WHERE id_sala='$id_sala_' and id_tabla='4'";
					$estimado4=mysqli_query($mysqli,$tiempo_4);
					$f4 = mysqli_fetch_assoc($estimado4);
					date_default_timezone_set('America/Caracas'); 
					$fecha4 = date('H:i:s');
					$tiempo4=$f4['tiempo'];
					if($tiempo4<=$fecha4){
						echo
						'
						<button type="button" id="pujar4" style="background-color: #FFFFFF; border: none;">
						<img src="img/puja.png" class="rounded-circle" alt="Eniun" width="50">
						</button>
						';
					}else{
						echo
						'
						<img src="img/cargando.gif" class="rounded-circle" alt="Eniun" width="50">
						';	
					}

				}else{

					echo
					'
										<button type="button" id="cancelar4" style="background-color: #FFFFFF; border: none;">
						Cancelar
						</button>
					';

				}

				}else{ echo 'Agotado'; }
				}else{ echo 'Retirado'; }

				echo
				'
				</center>
				</td>
				';

			}

		}else{} 
		?>
	</tr>

	<tr>
		<?php 
		$r = mysqli_query($mysqli, "SELECT * FROM tablas left join salas on salas.id_sala = tablas.id_sala WHERE tablas.id_sala='$id_sala_' and numero_tabla='5'");
		$f = mysqli_fetch_assoc($r);
		if($f){

			if($f['nombre_ejemplar']=='0'){


			}else{

				$fecha_activacion_time = strtotime($f['fecha_activacion']);
				$fecha_activacion_time + 900;
				if(time() > $fecha_activacion_time){ $in_agotado = 1; }else{ $in_agotado = 0;}

				echo
				'
				<td style="border: black 1px solid; background-color: #073D00; color: white; "><b>5</b></td>
				<td style="border: black 1px solid;">'.htmlentities($f['nombre_ejemplar']).'</td>
				<td style="border: black 1px solid;"><font color="00BD0B">'.htmlentities($f['cliente']).'</font></td>
				<td style="border: black 1px solid; font-size: 18px; "><font face="Rockwell"><b>$ '.htmlentities($f['precio']).'</b></font> </td>

				<td style="border: black 1px solid;">
				<center>
				<input type="text" id="id_usuario" value="'.$_SESSION['id_usuario'].'" style="display: none;">
				<input type="hidden" id="token" value="'.$_SESSION['token'].'" />
				<input type="text" id="id_sala" value="'.$id_sala_.'" style="display: none;">
				<input type="text" id="num_tabla5" value="5" style="display: none;">
				';
				if($f['in_activo'] == 1){
				if($in_agotado == 0){
				if($f['id_usuario']!=$_SESSION['id_usuario']){

					$tiempo_5="SELECT * FROM historial_tiempo WHERE id_sala='$id_sala_' and id_tabla='5'";
					$estimado5=mysqli_query($mysqli,$tiempo_5);
					$f5 = mysqli_fetch_assoc($estimado5);
					date_default_timezone_set('America/Caracas'); 
					$fecha5 = date('H:i:s');
					$tiempo5=$f5['tiempo'];
					if($tiempo5<=$fecha5){
						echo
						'
						<button type="button" id="pujar5" style="background-color: #FFFFFF; border: none;">
						<img src="img/puja.png" class="rounded-circle" alt="Eniun" width="50">
						</button>
						';
					}else{
						echo
						'
						<img src="img/cargando.gif" class="rounded-circle" alt="Eniun" width="50">
						';	
					}

				}else{

					echo
					'
										<button type="button" id="cancelar5" style="background-color: #FFFFFF; border: none;">
						Cancelar
						</button>
					';	

				}

				}else{ echo 'Agotado'; }
				}else{ echo 'Retirado'; }

				echo
				'
				</center>
				</td>
				';

			}

		}else{} 
		?>
	</tr>

	<tr>
		<?php 
		$r = mysqli_query($mysqli, "SELECT * FROM tablas left join salas on salas.id_sala = tablas.id_sala WHERE tablas.id_sala='$id_sala_' and numero_tabla='6'");
		$f = mysqli_fetch_assoc($r);
		if($f){

			if($f['nombre_ejemplar']=='0'){


			}else{

				$fecha_activacion_time = strtotime($f['fecha_activacion']);
				$fecha_activacion_time + 900;
				if(time() > $fecha_activacion_time){ $in_agotado = 1; }else{ $in_agotado = 0;}

				echo
				'
				<td style="border: black 1px solid; background-color: #000000; color: #F1E309; "><b>6</b></td>
				<td style="border: black 1px solid;">'.htmlentities($f['nombre_ejemplar']).'</td>
				<td style="border: black 1px solid;"><font color="00BD0B">'.htmlentities($f['cliente']).'</font></td>
				<td style="border: black 1px solid; font-size: 18px; "><font face="Rockwell"><b>$ '.htmlentities($f['precio']).'</b></font> </td>

				<td style="border: black 1px solid;">
				<center>
				<input type="text" id="id_usuario" value="'.$_SESSION['id_usuario'].'" style="display: none;">
				<input type="hidden" id="token" value="'.$_SESSION['token'].'" />
				<input type="text" id="id_sala" value="'.$id_sala_.'" style="display: none;">
				<input type="text" id="num_tabla6" value="6" style="display: none;">
				';
				if($f['in_activo'] == 1){
				if($in_agotado == 0){
				if($f['id_usuario']!=$_SESSION['id_usuario']){

					$tiempo_6="SELECT * FROM historial_tiempo WHERE id_sala='$id_sala_' and id_tabla='6'";
					$estimado6=mysqli_query($mysqli,$tiempo_6);
					$f6 = mysqli_fetch_assoc($estimado6);
					date_default_timezone_set('America/Caracas'); 
					$fecha6 = date('H:i:s');
					$tiempo6=$f6['tiempo'];
					if($tiempo6<=$fecha6){
						echo
						'
						<button type="button" id="pujar6" style="background-color: #FFFFFF; border: none;">
						<img src="img/puja.png" class="rounded-circle" alt="Eniun" width="50">
						</button>
						';
					}else{
						echo
						'
						<img src="img/cargando.gif" class="rounded-circle" alt="Eniun" width="50">
						';	
					}

				}else{

					echo
					'
				    <button type="button" id="cancelar6" style="background-color: #FFFFFF; border: none;">
						Cancelar
						</button>
					';

				}

				}else{ echo 'Agotado'; }
				}else{ echo 'Retirado'; }
				echo
				'
				</center>
				</td>
				';

			}

		}else{} 
		?>
	</tr>

	<tr>
		<?php 
		$r = mysqli_query($mysqli, "SELECT * FROM tablas left join salas on salas.id_sala = tablas.id_sala WHERE tablas.id_sala='$id_sala_' and numero_tabla='7'");
		$f = mysqli_fetch_assoc($r);
		if($f){

			if($f['nombre_ejemplar']=='0'){


			}else{

				$fecha_activacion_time = strtotime($f['fecha_activacion']);
				$fecha_activacion_time + 900;
				if(time() > $fecha_activacion_time){ $in_agotado = 1; }else{ $in_agotado = 0;}

				echo
				'
				<td style="border: black 1px solid; background-color: #F14109; color: black; "><b>7</b></td>
				<td style="border: black 1px solid;">'.htmlentities($f['nombre_ejemplar']).'</td>
				<td style="border: black 1px solid;"><font color="00BD0B">'.htmlentities($f['cliente']).'</font></td>
				<td style="border: black 1px solid; font-size: 18px; "><font face="Rockwell"><b>$ '.htmlentities($f['precio']).'</b></font> </td>

				<td style="border: black 1px solid;">
				<center>
				<input type="text" id="id_usuario" value="'.$_SESSION['id_usuario'].'" style="display: none;">
				<input type="hidden" id="token" value="'.$_SESSION['token'].'" />
				<input type="text" id="id_sala" value="'.$id_sala_.'" style="display: none;">
				<input type="text" id="num_tabla7" value="7" style="display: none;">
				';
				if($f['in_activo'] == 1){
				if($in_agotado == 0){
				if($f['id_usuario']!=$_SESSION['id_usuario']){

					$tiempo_7="SELECT * FROM historial_tiempo WHERE id_sala='$id_sala_' and id_tabla='7'";
					$estimado7=mysqli_query($mysqli,$tiempo_7);
					$f7 = mysqli_fetch_assoc($estimado7);
					date_default_timezone_set('America/Caracas'); 
					$fecha7 = date('H:i:s');
					$tiempo7=$f7['tiempo'];
					if($tiempo7<=$fecha7){
						echo
						'
						<button type="button" id="pujar7" style="background-color: #FFFFFF; border: none;">
						<img src="img/puja.png" class="rounded-circle" alt="Eniun" width="50">
						</button>
						';
					}else{
						echo
						'
						<img src="img/cargando.gif" class="rounded-circle" alt="Eniun" width="50">
						';	
					}

				}else{

					echo
					'
										<button type="button" id="cancelar7" style="background-color: #FFFFFF; border: none;">
						Cancelar
						</button>
					';

				}

				}else{ echo 'Agotado'; }
				}else{ echo 'Retirado'; }
				echo
				'
				</center>
				</td>
				';

			}

		}else{} 
		?>
	</tr>

	<tr>
		<?php 
		$r = mysqli_query($mysqli, "SELECT * FROM tablas left join salas on salas.id_sala = tablas.id_sala WHERE tablas.id_sala='$id_sala_' and numero_tabla='8'");
		$f = mysqli_fetch_assoc($r);
		if($f){

			if($f['nombre_ejemplar']=='0'){


			}else{

				$fecha_activacion_time = strtotime($f['fecha_activacion']);
				$fecha_activacion_time + 900;
				if(time() > $fecha_activacion_time){ $in_agotado = 1; }else{ $in_agotado = 0;}

				echo
				'
				<td style="border: black 1px solid; background-color: #F1285C; color: black; "><b>8</b></td>
				<td style="border: black 1px solid;">'.htmlentities($f['nombre_ejemplar']).'</td>
				<td style="border: black 1px solid;"><font color="00BD0B">'.htmlentities($f['cliente']).'</font></td>
				<td style="border: black 1px solid; font-size: 18px; "><font face="Rockwell"><b>$ '.htmlentities($f['precio']).'</b></font> </td>

				<td style="border: black 1px solid;">
				<center>
				<input type="text" id="id_usuario" value="'.$_SESSION['id_usuario'].'" style="display: none;">
				<input type="hidden" id="token" value="'.$_SESSION['token'].'" />
				<input type="text" id="id_sala" value="'.$id_sala_.'" style="display: none;">
				<input type="text" id="num_tabla8" value="8" style="display: none;">
				';
				if($f['in_activo'] == 1){
				if($in_agotado == 0){
				if($f['id_usuario']!=$_SESSION['id_usuario']){

					$tiempo_8="SELECT * FROM historial_tiempo WHERE id_sala='$id_sala_' and id_tabla='8'";
					$estimado8=mysqli_query($mysqli,$tiempo_8);
					$f8 = mysqli_fetch_assoc($estimado8);
					date_default_timezone_set('America/Caracas'); 
					$fecha8 = date('H:i:s');
					$tiempo8=$f8['tiempo'];
					if($tiempo8<=$fecha8){
						echo
						'
						<button type="button" id="pujar8" style="background-color: #FFFFFF; border: none;">
						<img src="img/puja.png" class="rounded-circle" alt="Eniun" width="50">
						</button>
						';
					}else{
						echo
						'
						<img src="img/cargando.gif" class="rounded-circle" alt="Eniun" width="50">
						';	
					}

				}else{

					echo
					'
					<button type="button" id="cancelar8" style="background-color: #FFFFFF; border: none;">
						Cancelar
						</button>
					';

				}

				}else{ echo 'Agotado'; }
				}else{ echo 'Retirado'; }
				echo
				'
				</center>
				</td>
				';

			}

		}else{} 
		?>
	</tr>

	<tr>
		<?php 
		$r = mysqli_query($mysqli, "SELECT * FROM tablas left join salas on salas.id_sala = tablas.id_sala WHERE tablas.id_sala='$id_sala_' and numero_tabla='9'");
		$f = mysqli_fetch_assoc($r);
		if($f){

			if($f['nombre_ejemplar']=='0'){


			}else{

				$fecha_activacion_time = strtotime($f['fecha_activacion']);
				$fecha_activacion_time + 900;
				if(time() > $fecha_activacion_time){ $in_agotado = 1; }else{ $in_agotado = 0;}

				echo
				'
				<td style="border: black 1px solid; background-color: #00A3D3; color: black; "><b>9</b></td>
				<td style="border: black 1px solid;">'.htmlentities($f['nombre_ejemplar']).'</td>
				<td style="border: black 1px solid;"><font color="00BD0B">'.htmlentities($f['cliente']).'</font></td>
				<td style="border: black 1px solid; font-size: 18px; "><font face="Rockwell"><b>$ '.htmlentities($f['precio']).'</b></font> </td>

				<td style="border: black 1px solid;">
				<center>
				<input type="text" id="id_usuario" value="'.$_SESSION['id_usuario'].'" style="display: none;">
				<input type="hidden" id="token" value="'.$_SESSION['token'].'" />
				<input type="text" id="id_sala" value="'.$id_sala_.'" style="display: none;">
				<input type="text" id="num_tabla9" value="9" style="display: none;">
				';
				if($f['in_activo'] == 1){
				if($in_agotado == 0){
				if($f['id_usuario']!=$_SESSION['id_usuario']){

					$tiempo_9="SELECT * FROM historial_tiempo WHERE id_sala='$id_sala_' and id_tabla='9'";
					$estimado9=mysqli_query($mysqli,$tiempo_9);
					$f9 = mysqli_fetch_assoc($estimado9);
					date_default_timezone_set('America/Caracas'); 
					$fecha9 = date('H:i:s');
					$tiempo9=$f9['tiempo'];
					if($tiempo9<=$fecha9){
						echo
						'
						<button type="button" id="pujar9" style="background-color: #FFFFFF; border: none;">
						<img src="img/puja.png" class="rounded-circle" alt="Eniun" width="50">
						</button>
						';
					}else{
						echo
						'
						<img src="img/cargando.gif" class="rounded-circle" alt="Eniun" width="50">
						';	
					}

				}else{

					echo
					'
					<button type="button" id="cancelar9" style="background-color: #FFFFFF; border: none;">
						Cancelar
						</button>
					';

				}

				}else{ echo 'Agotado'; }
				}else{ echo 'Retirado'; }
				echo
				'
				</center>
				</td>
				';

			}

		}else{} 
		?>
	</tr>

	<tr>
		<?php 
		$r = mysqli_query($mysqli, "SELECT * FROM tablas left join salas on salas.id_sala = tablas.id_sala WHERE tablas.id_sala='$id_sala_' and numero_tabla='10'");
		$f = mysqli_fetch_assoc($r);
		if($f){

			if($f['nombre_ejemplar']=='0'){


			}else{

				$fecha_activacion_time = strtotime($f['fecha_activacion']);
				$fecha_activacion_time + 900;
				if(time() > $fecha_activacion_time){ $in_agotado = 1; }else{ $in_agotado = 0;}

				echo
				'
				<td style="border: black 1px solid; background-color: #6841F7; color: white; "><b>10</b></td>
				<td style="border: black 1px solid;">'.htmlentities($f['nombre_ejemplar']).'</td>
				<td style="border: black 1px solid;"><font color="00BD0B">'.htmlentities($f['cliente']).'</font></td>
				<td style="border: black 1px solid; font-size: 18px; "><font face="Rockwell"><b>$ '.htmlentities($f['precio']).'</b></font> </td>

				<td style="border: black 1px solid;">
				<center>
				<input type="text" id="id_usuario" value="'.$_SESSION['id_usuario'].'" style="display: none;">
				<input type="hidden" id="token" value="'.$_SESSION['token'].'" />
				<input type="text" id="id_sala" value="'.$id_sala_.'" style="display: none;">
				<input type="text" id="num_tabla10" value="10" style="display: none;">
				';
				if($f['in_activo'] == 1){
				if($in_agotado == 0){
				if($f['id_usuario']!=$_SESSION['id_usuario']){

					$tiempo_10="SELECT * FROM historial_tiempo WHERE id_sala='$id_sala_' and id_tabla='10'";
					$estimado10=mysqli_query($mysqli,$tiempo_10);
					$f10 = mysqli_fetch_assoc($estimado10);
					date_default_timezone_set('America/Caracas'); 
					$fecha10 = date('H:i:s');
					$tiempo10=$f10['tiempo'];
					if($tiempo10<=$fecha10){
						echo
						'
						<button type="button" id="pujar10" style="background-color: #FFFFFF; border: none;">
						<img src="img/puja.png" class="rounded-circle" alt="Eniun" width="50">
						</button>
						';
					}else{
						echo
						'
						<img src="img/cargando.gif" class="rounded-circle" alt="Eniun" width="50">
						';	
					}

				}else{

					echo
					'
					<button type="button" id="cancelar10" style="background-color: #FFFFFF; border: none;">
						Cancelar
						</button>
					';

				}

				}else{ echo 'Agotado'; }
				}else{ echo 'Retirado'; }
				echo
				'
				</center>
				</td>
				';

			}

		}else{} 
		?>
	</tr>

	<tr>
		<?php 
		$r = mysqli_query($mysqli, "SELECT * FROM tablas left join salas on salas.id_sala = tablas.id_sala WHERE tablas.id_sala='$id_sala_' and numero_tabla='11'");
		$f = mysqli_fetch_assoc($r);
		if($f){

			if($f['nombre_ejemplar']=='0'){


			}else{

				$fecha_activacion_time = strtotime($f['fecha_activacion']);
				$fecha_activacion_time + 900;
				if(time() > $fecha_activacion_time){ $in_agotado = 1; }else{ $in_agotado = 0;}

				echo
				'
				<td style="border: black 1px solid; background-color: #C4E2FF; color: #F00303; "><b>11</b></td>
				<td style="border: black 1px solid;">'.htmlentities($f['nombre_ejemplar']).'</td>
				<td style="border: black 1px solid;"><font color="00BD0B">'.htmlentities($f['cliente']).'</font></td>
				<td style="border: black 1px solid; font-size: 18px; "><font face="Rockwell"><b>$ '.htmlentities($f['precio']).'</b></font> </td>

				<td style="border: black 1px solid;">
				<center>
				<input type="text" id="id_usuario" value="'.$_SESSION['id_usuario'].'" style="display: none;">
				<input type="hidden" id="token" value="'.$_SESSION['token'].'" />
				<input type="text" id="id_sala" value="'.$id_sala_.'" style="display: none;">
				<input type="text" id="num_tabla11" value="11" style="display: none;">
				';
				if($f['in_activo'] == 1){
				if($in_agotado == 0){
				if($f['id_usuario']!=$_SESSION['id_usuario']){

					$tiempo_11="SELECT * FROM historial_tiempo WHERE id_sala='$id_sala_' and id_tabla='11'";
					$estimado11=mysqli_query($mysqli,$tiempo_11);
					$f11 = mysqli_fetch_assoc($estimado11);
					date_default_timezone_set('America/Caracas'); 
					$fecha11 = date('H:i:s');
					$tiempo11=$f11['tiempo'];
					if($tiempo11<=$fecha11){
						echo
						'
						<button type="button" id="pujar11" style="background-color: #FFFFFF; border: none;">
						<img src="img/puja.png" class="rounded-circle" alt="Eniun" width="50">
						</button>
						';
					}else{
						echo
						'
						<img src="img/cargando.gif" class="rounded-circle" alt="Eniun" width="50">
						';	
					}

				}else{

					echo
					'
									<button type="button" id="cancelar11" style="background-color: #FFFFFF; border: none;">
						Cancelar
						</button>
					';
				}
				}else{ echo 'Agotado'; }
				}else{ echo 'Retirado'; }
				echo
				'
				</center>
				</td>
				';

			}

		}else{} 
		?>
	</tr>

	<tr>
		<?php 
		$r = mysqli_query($mysqli, "SELECT * FROM tablas left join salas on salas.id_sala = tablas.id_sala WHERE tablas.id_sala='$id_sala_' and numero_tabla='12'");
		$f = mysqli_fetch_assoc($r);
		if($f){

			if($f['nombre_ejemplar']=='0'){


			}else{

				$fecha_activacion_time = strtotime($f['fecha_activacion']);
				$fecha_activacion_time + 900;
				if(time() > $fecha_activacion_time){ $in_agotado = 1; }else{ $in_agotado = 0;}

				echo
				'
				<td style="border: black 1px solid; background-color: #3BD502; color: black; "><b>12</b></td>
				<td style="border: black 1px solid;">'.htmlentities($f['nombre_ejemplar']).'</td>
				<td style="border: black 1px solid;"><font color="00BD0B">'.htmlentities($f['cliente']).'</font></td>
				<td style="border: black 1px solid; font-size: 18px; "><font face="Rockwell"><b>$ '.htmlentities($f['precio']).'</b></font> </td>

				<td style="border: black 1px solid;">
				<center>
				<input type="text" id="id_usuario" value="'.$_SESSION['id_usuario'].'" style="display: none;">
				<input type="hidden" id="token" value="'.$_SESSION['token'].'" />
				<input type="text" id="id_sala" value="'.$id_sala_.'" style="display: none;">
				<input type="text" id="num_tabla12" value="12" style="display: none;">
				';
				if($f['in_activo'] == 1){
				if($in_agotado == 0){
				if($f['id_usuario']!=$_SESSION['id_usuario']){

					$tiempo_12="SELECT * FROM historial_tiempo WHERE id_sala='$id_sala_' and id_tabla='12'";
					$estimado12=mysqli_query($mysqli,$tiempo_12);
					$f12 = mysqli_fetch_assoc($estimado12);
					date_default_timezone_set('America/Caracas'); 
					$fecha12 = date('H:i:s');
					$tiempo12=$f12['tiempo'];
					if($tiempo12<=$fecha12){
						echo
						'
						<button type="button" id="pujar12" style="background-color: #FFFFFF; border: none;">
						<img src="img/puja.png" class="rounded-circle" alt="Eniun" width="50">
						</button>
						';
					}else{
						echo
						'
						<img src="img/cargando.gif" class="rounded-circle" alt="Eniun" width="50">
						';	
					}

				}else{

					echo
					'
					<button type="button" id="cancelar12" style="background-color: #FFFFFF; border: none;">
						Cancelar
						</button>
					';	

				}

				}else{ echo 'Agotado'; }
				}else{ echo 'Retirado'; }
				echo
				'
				</center>
				</td>
				';

			}

		}else{} 
		?>
	</tr>

	<tr>
		<?php 
		$r = mysqli_query($mysqli, "SELECT * FROM tablas left join salas on salas.id_sala = tablas.id_sala WHERE tablas.id_sala='$id_sala_' and numero_tabla='13'");
		$f = mysqli_fetch_assoc($r);
		if($f){

			if($f['nombre_ejemplar']=='0'){


			}else{

				$fecha_activacion_time = strtotime($f['fecha_activacion']);
				$fecha_activacion_time + 900;
				if(time() > $fecha_activacion_time){ $in_agotado = 1; }else{ $in_agotado = 0;}

				echo
				'
				<td style="border: black 1px solid; background-color: #3A1603; color: white; "><b>13</b></td>
				<td style="border: black 1px solid;">'.htmlentities($f['nombre_ejemplar']).'</td>
				<td style="border: black 1px solid;"><font color="00BD0B">'.htmlentities($f['cliente']).'</font></td>
				<td style="border: black 1px solid; font-size: 18px; "><font face="Rockwell"><b>$ '.htmlentities($f['precio']).'</b></font> </td>

				<td style="border: black 1px solid;">
				<center>
				<input type="text" id="id_usuario" value="'.$_SESSION['id_usuario'].'" style="display: none;">
				<input type="hidden" id="token" value="'.$_SESSION['token'].'" />
				<input type="text" id="id_sala" value="'.$id_sala_.'" style="display: none;">
				<input type="text" id="num_tabla13" value="13" style="display: none;">
				';
				if($f['in_activo'] == 1){
				if($in_agotado == 0){
				if($f['id_usuario']!=$_SESSION['id_usuario']){

					$tiempo_13="SELECT * FROM historial_tiempo WHERE id_sala='$id_sala_' and id_tabla='13'";
					$estimado13=mysqli_query($mysqli,$tiempo_13);
					$f13 = mysqli_fetch_assoc($estimado13);
					date_default_timezone_set('America/Caracas'); 
					$fecha13 = date('H:i:s');
					$tiempo13=$f13['tiempo'];
					if($tiempo13<=$fecha13){
						echo
						'
						<button type="button" id="pujar13" style="background-color: #FFFFFF; border: none;">
						<img src="img/puja.png" class="rounded-circle" alt="Eniun" width="50">
						</button>
						';
					}else{
						echo
						'
						<img src="img/cargando.gif" class="rounded-circle" alt="Eniun" width="50">
						';	
					}

				}else{

					echo
					'
					<button type="button" id="cancelar13" style="background-color: #FFFFFF; border: none;">
						Cancelar
						</button>
					';

				}

				}else{ echo 'Agotado'; }
				}else{ echo 'Retirado'; }
				echo
				'
				</center>
				</td>
				';

			}

		}else{} 
		?>
	</tr>

	<tr>
		<?php 
		$r = mysqli_query($mysqli, "SELECT * FROM tablas left join salas on salas.id_sala = tablas.id_sala WHERE tablas.id_sala='$id_sala_' and numero_tabla='14'");
		$f = mysqli_fetch_assoc($r);
		if($f){

			if($f['nombre_ejemplar']=='0'){


			}else{

				$fecha_activacion_time = strtotime($f['fecha_activacion']);
				$fecha_activacion_time + 900;
				if(time() > $fecha_activacion_time){ $in_agotado = 1; }else{ $in_agotado = 0;}

				echo
				'
				<td style="border: black 1px solid; background-color: #9E0A00; color: #FBFF00; "><b>14</b></td>
				<td style="border: black 1px solid;">'.htmlentities($f['nombre_ejemplar']).'</td>
				<td style="border: black 1px solid;"><font color="00BD0B">'.htmlentities($f['cliente']).'</font></td>
				<td style="border: black 1px solid; font-size: 18px; "><font face="Rockwell"><b>$ '.htmlentities($f['precio']).'</b></font> </td>

				<td style="border: black 1px solid;">
				<center>
				<input type="text" id="id_usuario" value="'.$_SESSION['id_usuario'].'" style="display: none;">
				<input type="hidden" id="token" value="'.$_SESSION['token'].'" />
				<input type="text" id="id_sala" value="'.$id_sala_.'" style="display: none;">
				<input type="text" id="num_tabla14" value="14" style="display: none;">
				';
				if($f['in_activo'] == 1){
				if($in_agotado == 0){
				if($f['id_usuario']!=$_SESSION['id_usuario']){

					$tiempo_14="SELECT * FROM historial_tiempo WHERE id_sala='$id_sala_' and id_tabla='14'";
					$estimado14=mysqli_query($mysqli,$tiempo_14);
					$f14 = mysqli_fetch_assoc($estimado14);
					date_default_timezone_set('America/Caracas'); 
					$fecha14 = date('H:i:s');
					$tiempo14=$f14['tiempo'];
					if($tiempo14<=$fecha14){
						echo
						'
						<button type="button" id="pujar14" style="background-color: #FFFFFF; border: none;">
						<img src="img/puja.png" class="rounded-circle" alt="Eniun" width="50">
						</button>
						';
					}else{
						echo
						'
						<img src="img/cargando.gif" class="rounded-circle" alt="Eniun" width="50">
						';	
					}

				}else{

					echo
					'
					<button type="button" id="cancelar14" style="background-color: #FFFFFF; border: none;">
						Cancelar
						</button>
					';
					
				}

				}else{ echo 'Agotado'; }
				}else{ echo 'Retirado'; }
				echo
				'
				</center>
				</td>
				';

			}

		}else{} 
		?>
	</tr>

	<tr>
		<td style="border: #072B00 1px solid; background-color: #072B00; "></td>
		<td style="border: #072B00 1px solid; background-color: #072B00; "></td>
		<td style="border: #072B00 1px solid; background-color: #072B00;  color: white;">TOTAL</td>
		<?php 

		$s1 = mysqli_query($mysqli, "SELECT SUM(precio) as total_tabla1 FROM tablas WHERE id_sala='$id_sala_' and numero_tabla>=1 and numero_tabla<=14 ");
		$sm1 = mysqli_fetch_assoc($s1);
		?>
		<td style="border: black 1px solid; background-color: #FFFFFF; ">$ <?php echo $sm1['total_tabla1']; ?></td>

		<td style="border: #072B00 1px solid; background-color: #072B00; "></td>
	</tr>
</tbody>


<!--------------------- PUJAR ------------------------>
<script src="validaciones_/_pujas/js/pujar.js"></script>
<script src="validaciones_/_pujas/js/cancelar.js"></script>
<!--------------------- PUJAR ------------------------>