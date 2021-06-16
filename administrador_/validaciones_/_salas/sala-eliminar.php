<?php 

	require("../../../conexion_/conexion.php");

    $query = mysqli_query($mysqli, "DELETE FROM salas");

	$query2 = mysqli_query($mysqli, "DELETE FROM historial");

    $query3 = mysqli_query($mysqli, "DELETE FROM tablas");

	$query4 = mysqli_query($mysqli, "DELETE FROM ganadores");

	$query5 = mysqli_query($mysqli, "DELETE FROM historial_pagos");

	$query6 = mysqli_query($mysqli, "DELETE FROM salas_tablas");

	$query7 = mysqli_query($mysqli, "DELETE FROM historial_tiempo");

	$query8 = mysqli_query($mysqli, "UPDATE total_ganancias_casa SET ganancias = '0' WHERE id_total='1'");

	header("location: ../../salas");

 ?>