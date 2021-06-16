<?php 

session_start();

require("../../conexion_/conexion.php");

$tablas="SELECT * FROM historial WHERE numero_tabla='1' ";
$tablas_=mysqli_query($mysqli,$tablas);


while ($tabla=mysqli_fetch_row ($tablas_)){

	$id_sala_ = $tabla[2];

}





$sql="SELECT * FROM historial";
$ressql=mysqli_query($mysqli,$sql);
$result = 0;
$result = mysqli_num_rows($ressql);
if ($result > 0) { while ($row=mysqli_fetch_row ($ressql)){ $po = $row[0]; } }

else{ 
	echo'
	<script>
	function redireccionarPagina() {
		window.location = "finalizo?from='.htmlentities($id_sala_).'";
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
	</tr>
</thead>
<tbody class="text-negro2 contenedores_2">
	<tr>
		<?php 
		$r = mysqli_query($mysqli, "SELECT * FROM historial WHERE id_sala='$id_sala_' and numero_tabla='1'");
		$f = mysqli_fetch_assoc($r);
		if($f){

			if($f['nombre_ejemplar']=='0'){


			}else{

				echo
				'
				<td style="border: black 1px solid; background-color: #F10303; color: white; "><b>1</b></td>
				<td style="border: black 1px solid;">'.htmlentities($f['nombre_ejemplar']).'</td>
				<td style="border: black 1px solid;"><font color="00BD0B">'.htmlentities($f['cliente']).'</font></td>
				<td style="border: black 1px solid; font-size: 18px; "><font face="Rockwell"><b>$ '.htmlentities($f['precio']).'</b></font> </td>
				';

			}

		}else{} 
		?>
	</tr>

	<tr>
		<?php 
		$r = mysqli_query($mysqli, "SELECT * FROM historial WHERE id_sala='$id_sala_' and numero_tabla='2'");
		$f = mysqli_fetch_assoc($r);
		if($f){

			if($f['nombre_ejemplar']=='0'){


			}else{

				echo
				'
				<td style="border: black 1px solid; background-color: #FFFFFF; color: black; "><b>2</b></td>
				<td style="border: black 1px solid;">'.htmlentities($f['nombre_ejemplar']).'</td>
				<td style="border: black 1px solid;"><font color="00BD0B">'.htmlentities($f['cliente']).'</font></td>
				<td style="border: black 1px solid; font-size: 18px; "><font face="Rockwell"><b>$ '.htmlentities($f['precio']).'</b></font> </td>
				';

			}

		}else{} 
		?>
	</tr>

	<tr>
		<?php 
		$r = mysqli_query($mysqli, "SELECT * FROM historial WHERE id_sala='$id_sala_' and numero_tabla='3'");
		$f = mysqli_fetch_assoc($r);
		if($f){

			if($f['nombre_ejemplar']=='0'){


			}else{

				echo
				'
				<td style="border: black 1px solid; background-color: #032FB0; color: white; "><b>3</b></td>
				<td style="border: black 1px solid;">'.htmlentities($f['nombre_ejemplar']).'</td>
				<td style="border: black 1px solid;"><font color="00BD0B">'.htmlentities($f['cliente']).'</font></td>
				<td style="border: black 1px solid; font-size: 18px; "><font face="Rockwell"><b>$ '.htmlentities($f['precio']).'</b></font> </td>
				';

			}

		}else{} 
		?>
	</tr>

	<tr>
		<?php 
		$r = mysqli_query($mysqli, "SELECT * FROM historial WHERE id_sala='$id_sala_' and numero_tabla='4'");
		$f = mysqli_fetch_assoc($r);
		if($f){

			if($f['nombre_ejemplar']=='0'){


			}else{

				echo
				'
				<td style="border: black 1px solid; background-color: #F5F500; color: black; "><b>4</b></td>
				<td style="border: black 1px solid;">'.htmlentities($f['nombre_ejemplar']).'</td>
				<td style="border: black 1px solid;"><font color="00BD0B">'.htmlentities($f['cliente']).'</font></td>
				<td style="border: black 1px solid; font-size: 18px; "><font face="Rockwell"><b>$ '.htmlentities($f['precio']).'</b></font> </td>
				';

			}

		}else{} 
		?>
	</tr>

	<tr>
		<?php 
		$r = mysqli_query($mysqli, "SELECT * FROM historial WHERE id_sala='$id_sala_' and numero_tabla='5'");
		$f = mysqli_fetch_assoc($r);
		if($f){

			if($f['nombre_ejemplar']=='0'){


			}else{

				echo
				'
				<td style="border: black 1px solid; background-color: #073D00; color: white; "><b>5</b></td>
				<td style="border: black 1px solid;">'.htmlentities($f['nombre_ejemplar']).'</td>
				<td style="border: black 1px solid;"><font color="00BD0B">'.htmlentities($f['cliente']).'</font></td>
				<td style="border: black 1px solid; font-size: 18px; "><font face="Rockwell"><b>$ '.htmlentities($f['precio']).'</b></font> </td>
				';

			}

		}else{} 
		?>
	</tr>

	<tr>
		<?php 
		$r = mysqli_query($mysqli, "SELECT * FROM historial WHERE id_sala='$id_sala_' and numero_tabla='6'");
		$f = mysqli_fetch_assoc($r);
		if($f){

			if($f['nombre_ejemplar']=='0'){


			}else{

				echo
				'
				<td style="border: black 1px solid; background-color: #000000; color: #F1E309; "><b>6</b></td>
				<td style="border: black 1px solid;">'.htmlentities($f['nombre_ejemplar']).'</td>
				<td style="border: black 1px solid;"><font color="00BD0B">'.htmlentities($f['cliente']).'</font></td>
				<td style="border: black 1px solid; font-size: 18px; "><font face="Rockwell"><b>$ '.htmlentities($f['precio']).'</b></font> </td>
				';

			}

		}else{} 
		?>
	</tr>

	<tr>
		<?php 
		$r = mysqli_query($mysqli, "SELECT * FROM historial WHERE id_sala='$id_sala_' and numero_tabla='7'");
		$f = mysqli_fetch_assoc($r);
		if($f){

			if($f['nombre_ejemplar']=='0'){


			}else{

				echo
				'
				<td style="border: black 1px solid; background-color: #F14109; color: black; "><b>7</b></td>
				<td style="border: black 1px solid;">'.htmlentities($f['nombre_ejemplar']).'</td>
				<td style="border: black 1px solid;"><font color="00BD0B">'.htmlentities($f['cliente']).'</font></td>
				<td style="border: black 1px solid; font-size: 18px; "><font face="Rockwell"><b>$ '.htmlentities($f['precio']).'</b></font> </td>
				';

			}

		}else{} 
		?>
	</tr>

	<tr>
		<?php 
		$r = mysqli_query($mysqli, "SELECT * FROM historial WHERE id_sala='$id_sala_' and numero_tabla='8'");
		$f = mysqli_fetch_assoc($r);
		if($f){

			if($f['nombre_ejemplar']=='0'){


			}else{

				echo
				'
				<td style="border: black 1px solid; background-color: #F1285C; color: black; "><b>8</b></td>
				<td style="border: black 1px solid;">'.htmlentities($f['nombre_ejemplar']).'</td>
				<td style="border: black 1px solid;"><font color="00BD0B">'.htmlentities($f['cliente']).'</font></td>
				<td style="border: black 1px solid; font-size: 18px; "><font face="Rockwell"><b>$ '.htmlentities($f['precio']).'</b></font> </td>
				';

			}

		}else{} 
		?>
	</tr>

	<tr>
		<?php 
		$r = mysqli_query($mysqli, "SELECT * FROM historial WHERE id_sala='$id_sala_' and numero_tabla='9'");
		$f = mysqli_fetch_assoc($r);
		if($f){

			if($f['nombre_ejemplar']=='0'){


			}else{

				echo
				'
				<td style="border: black 1px solid; background-color: #00A3D3; color: black; "><b>9</b></td>
				<td style="border: black 1px solid;">'.htmlentities($f['nombre_ejemplar']).'</td>
				<td style="border: black 1px solid;"><font color="00BD0B">'.htmlentities($f['cliente']).'</font></td>
				<td style="border: black 1px solid; font-size: 18px; "><font face="Rockwell"><b>$ '.htmlentities($f['precio']).'</b></font> </td>
				';

			}

		}else{} 
		?>
	</tr>

	<tr>
		<?php 
		$r = mysqli_query($mysqli, "SELECT * FROM historial WHERE id_sala='$id_sala_' and numero_tabla='10'");
		$f = mysqli_fetch_assoc($r);
		if($f){

			if($f['nombre_ejemplar']=='0'){


			}else{

				echo
				'
				<td style="border: black 1px solid; background-color: #6841F7; color: white; "><b>10</b></td>
				<td style="border: black 1px solid;">'.htmlentities($f['nombre_ejemplar']).'</td>
				<td style="border: black 1px solid;"><font color="00BD0B">'.htmlentities($f['cliente']).'</font></td>
				<td style="border: black 1px solid; font-size: 18px; "><font face="Rockwell"><b>$ '.htmlentities($f['precio']).'</b></font> </td>
				';

			}

		}else{} 
		?>
	</tr>

	<tr>
		<?php 
		$r = mysqli_query($mysqli, "SELECT * FROM historial WHERE id_sala='$id_sala_' and numero_tabla='11'");
		$f = mysqli_fetch_assoc($r);
		if($f){

			if($f['nombre_ejemplar']=='0'){


			}else{

				echo
				'
				<td style="border: black 1px solid; background-color: #C4E2FF; color: #F00303; "><b>11</b></td>
				<td style="border: black 1px solid;">'.htmlentities($f['nombre_ejemplar']).'</td>
				<td style="border: black 1px solid;"><font color="00BD0B">'.htmlentities($f['cliente']).'</font></td>
				<td style="border: black 1px solid; font-size: 18px; "><font face="Rockwell"><b>$ '.htmlentities($f['precio']).'</b></font> </td>
				';

			}

		}else{} 
		?>
	</tr>

	<tr>
		<?php 
		$r = mysqli_query($mysqli, "SELECT * FROM historial WHERE id_sala='$id_sala_' and numero_tabla='12'");
		$f = mysqli_fetch_assoc($r);
		if($f){

			if($f['nombre_ejemplar']=='0'){


			}else{

				echo
				'
				<td style="border: black 1px solid; background-color: #3BD502; color: black; "><b>12</b></td>
				<td style="border: black 1px solid;">'.htmlentities($f['nombre_ejemplar']).'</td>
				<td style="border: black 1px solid;"><font color="00BD0B">'.htmlentities($f['cliente']).'</font></td>
				<td style="border: black 1px solid; font-size: 18px; "><font face="Rockwell"><b>$ '.htmlentities($f['precio']).'</b></font> </td>
				';

			}

		}else{} 
		?>
	</tr>

	<tr>
		<?php 
		$r = mysqli_query($mysqli, "SELECT * FROM historial WHERE id_sala='$id_sala_' and numero_tabla='13'");
		$f = mysqli_fetch_assoc($r);
		if($f){

			if($f['nombre_ejemplar']=='0'){


			}else{

				echo
				'
				<td style="border: black 1px solid; background-color: #3A1603; color: white; "><b>13</b></td>
				<td style="border: black 1px solid;">'.htmlentities($f['nombre_ejemplar']).'</td>
				<td style="border: black 1px solid;"><font color="00BD0B">'.htmlentities($f['cliente']).'</font></td>
				<td style="border: black 1px solid; font-size: 18px; "><font face="Rockwell"><b>$ '.htmlentities($f['precio']).'</b></font> </td>
				';

			}

		}else{} 
		?>
	</tr>

	<tr>
		<?php 
		$r = mysqli_query($mysqli, "SELECT * FROM historial WHERE id_sala='$id_sala_' and numero_tabla='14'");
		$f = mysqli_fetch_assoc($r);
		if($f){

			if($f['nombre_ejemplar']=='0'){


			}else{

				echo
				'
				<td style="border: black 1px solid; background-color: #9E0A00; color: #FBFF00; "><b>14</b></td>
				<td style="border: black 1px solid;">'.htmlentities($f['nombre_ejemplar']).'</td>
				<td style="border: black 1px solid;"><font color="00BD0B">'.htmlentities($f['cliente']).'</font></td>
				<td style="border: black 1px solid; font-size: 18px; "><font face="Rockwell"><b>$ '.htmlentities($f['precio']).'</b></font> </td>
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

		$s1 = mysqli_query($mysqli, "SELECT SUM(precio) as total_tabla1 FROM historial WHERE id_sala='$id_sala_' and numero_tabla>=1 and numero_tabla<=14 ");
		$sm1 = mysqli_fetch_assoc($s1);
		?>
		<td style="border: black 1px solid; background-color: #FFFFFF; ">$ <?php echo $sm1['total_tabla1']; ?></td>

		<td style="border: #072B00 1px solid; background-color: #072B00; "></td>
	</tr>
</tbody>


<!--------------------- PUJAR ------------------------>
<script src="validaciones_/_pujas/js/pujar.js"></script>
<!--------------------- PUJAR ------------------------>