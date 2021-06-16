<?php 

require("../../conexion_/conexion.php");

$tablas="SELECT * FROM tablas WHERE numero_tabla='1' ";
$tablas_=mysqli_query($mysqli,$tablas);

while ($tabla=mysqli_fetch_row ($tablas_)){

	$id_sala = $tabla[2];

}


$salas="SELECT * FROM salas WHERE id_sala='$id_sala'";
$salas_=mysqli_query($mysqli,$salas);

while ($sala=mysqli_fetch_row ($salas_)){

	$pote_tablazo = $sala[7];
	$pote = $sala[8];

}


?>

<div class="col color-blanco">
	POTE TABLAZO <input type="" name="" value="$ <?php echo $pote_tablazo ?>" readonly="" style="width: 90px;">
</div>

<div class="col color-blanco">
	POTE <input type="" name="" value="$ <?php echo $pote ?>" readonly="" style="width: 90px;">
</div>

<div class="col color-blanco">
	<?php 


	$query3 = mysqli_query($mysqli, "SELECT * FROM porcentajes_pagos ");
	$data3 = mysqli_fetch_array($query3);

	$porcentaje=$data3['porcentaje'];


	$s = mysqli_query($mysqli, "SELECT SUM(precio) as total_tablas FROM tablas WHERE id_sala='$id_sala'");
	$sm = mysqli_fetch_assoc($s);

	$total_ganancias=$sm['total_tablas']*$porcentaje;
	$total_ganancias_user=$sm['total_tablas']-$total_ganancias+$pote_tablazo+$pote;
	
	?>
	TOTAL TABLA <br><input type="" name="" readonly="" value="$ <?php echo $total_ganancias_user; ?>" style="width: 90px;">
</div>