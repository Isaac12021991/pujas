<?php 

require("../../../conexion_/conexion.php");

$id=$_GET['id'];


$sql="SELECT * FROM tablas WHERE id_sala='$id'";
$ressql=mysqli_query($mysqli,$sql);
while ($row=mysqli_fetch_row ($ressql)){

	$saldo_a = $row[5];

	

	$sa_tablas="SELECT * FROM tablas WHERE id_sala='$id' ";
	$sa_tablas_=mysqli_query($mysqli,$sa_tablas);

	$result2 = 0;
	$result2 = mysqli_num_rows($sa_tablas_);
	if ($result2 > 0) {

		while ($tabla=mysqli_fetch_row ($sa_tablas_)){

			$id_tabla = $tabla[0];
			$numero_tabla = $tabla[1];
			$id_sala = $tabla[2];
			$id_usuario = $tabla[3];
			$nombre_ejemplar = $tabla[4];
			$cliente = $tabla[5];
			$precio = $tabla[6];
			$estado = $tabla[7];
			$saldo_inicial = $tabla[8];


			$suma_total = mysqli_query($mysqli, "SELECT SUM(precio) as total_recogido FROM tablas");
			$total_recogido = mysqli_fetch_array($suma_total);


			$sumatoria=$total_recogido['total_recogido'];

			$activar_tabla = mysqli_query($mysqli, "INSERT INTO historial (numero_tabla, id_sala, id_usuario, nombre_ejemplar, cliente, precio, total_recogido, estado) VALUES('$numero_tabla','$id_sala','$id_usuario','$nombre_ejemplar','$cliente','$precio','$sumatoria','2')");


				$eliminar_tabla = mysqli_query($mysqli, "DELETE FROM tablas WHERE id_sala='$id' ");

				$estado_sala = mysqli_query($mysqli, "UPDATE salas SET estado = '2' where id_sala = '$id'");

				$llenado_de_campos = mysqli_query($mysqli, "UPDATE historial SET id_usuario = '1', cliente = 'Casa' where id_usuario = '0'");

				$eliminar_historial = mysqli_query($mysqli, "DELETE FROM historial_pagos");

				$eliminar_tiempo = mysqli_query($mysqli, "DELETE FROM historial_tiempo");

				header("location: ../../salas");

			}

		}else{


		}

	}


	header("location: ../../salas");


	?>