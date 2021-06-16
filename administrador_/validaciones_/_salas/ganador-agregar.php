<?php 

session_start();

require("../../../conexion_/conexion.php");

$id_sala3 = $_POST['id_sala3'];
$primer_lugar = $_POST['primer_lugar'];


$checkemail=mysqli_query($mysqli,"SELECT * FROM ganadores WHERE id_sala='$id_sala3'");
$check_mail=mysqli_num_rows($checkemail);
if($check_mail>0){

	echo 1;


}else{

	date_default_timezone_set('America/Caracas');   
	$fecha = date('Y-m-d h:i a');


	$query2 = mysqli_query($mysqli, "SELECT * FROM historial WHERE id_sala='$id_sala3' LIMIT 1 ");
	$data2 = mysqli_fetch_array($query2);

	$total_recogido=$data2['total_recogido'];


	$query3 = mysqli_query($mysqli, "SELECT * FROM porcentajes_pagos ");
	$data3 = mysqli_fetch_array($query3);

	$porcentaje=$data3['porcentaje'];


	$total_ganancias=$total_recogido*$porcentaje;
	$total_ganancias_user=$total_recogido-$total_ganancias;


	$insertar = mysqli_query($mysqli, "INSERT INTO ganadores (id_sala, primer_lugar, pago_primer_lugar, segundo_lugar, tercer_lugar, fecha, estado) VALUES('$id_sala3','$primer_lugar', '$total_ganancias_user', '0', '0', '$fecha','0')");


	//AGREGA GANANCIAS A LA CASA Y RESTA EL POTE
	$s = mysqli_query($mysqli, "SELECT pote, pote_tablazo FROM salas WHERE id_sala='$id_sala3'");
	$sm = mysqli_fetch_assoc($s);

	$pote_tablazo=$sm['pote_tablazo'];
	$pote=$sm['pote'];


	$sql_valida3="SELECT * FROM total_ganancias_casa WHERE id_total='1'";
	$ressql_valida3=mysqli_query($mysqli,$sql_valida3);
	while ($row_valida3=mysqli_fetch_row ($ressql_valida3)){

		$saldo_a3 = $row_valida3[1];

	}

	$total_casa_ganancias=$saldo_a3+$total_ganancias;

	$total_casa_ganancias_final=$total_casa_ganancias-$pote-$pote_tablazo;

	$saldo_editar_casa = mysqli_query($mysqli, "UPDATE total_ganancias_casa SET ganancias = '$total_casa_ganancias_final' where id_total = '1'");
	//AGREGA GANANCIAS A LA CASA Y RESTA EL POTE



	$sala_editar = mysqli_query($mysqli, "UPDATE salas SET estado = '3' where id_sala = '$id_sala3'");

	if ($insertar) {


		$query2 = mysqli_query($mysqli, "SELECT * FROM historial WHERE numero_tabla='$primer_lugar' and id_sala='$id_sala3'");
		$data2 = mysqli_fetch_array($query2);

		$id_sala_gana=$data2['id_sala'];	
		$id_usuario_gana=$data2['id_usuario'];
		$cliente_gana=$data2['cliente'];
		$precio_gana=$data2['precio'];
		$total_recogido_gana=$data2['total_recogido'];


		$query3 = mysqli_query($mysqli, "SELECT * FROM ganadores WHERE estado='0' and id_sala='$id_sala3'");
		$data3 = mysqli_fetch_array($query3);

		$total_pago_cliente=$data3['pago_primer_lugar'];


		$sql_valida3="SELECT * FROM usuarios WHERE id_usuario='$id_usuario_gana'";
		$ressql_valida3=mysqli_query($mysqli,$sql_valida3);
		while ($row_valida3=mysqli_fetch_row ($ressql_valida3)){

			$saldo_a3 = $row_valida3[5];

		}

		$total_validado3=$saldo_a3+$total_pago_cliente+$pote+$pote_tablazo;

		$saldo_editar3 = mysqli_query($mysqli, "UPDATE usuarios SET saldo = '$total_validado3' where id_usuario = '$id_usuario_gana'");
		$ganadores_editar3 = mysqli_query($mysqli, "UPDATE ganadores SET estado = '1' where id_sala = '$id_sala3'");


		

		echo 0;

	}else{

		echo 2;

	}

}


?>