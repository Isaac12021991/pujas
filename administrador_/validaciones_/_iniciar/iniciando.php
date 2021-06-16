<?php 

require("../../../conexion_/conexion.php");

$id=$_GET['id'];

$sql="SELECT * FROM tablas";
$ressql=mysqli_query($mysqli,$sql);

$result = 0;
$result = mysqli_num_rows($ressql);
if ($result > 0) {

	while ($row=mysqli_fetch_row ($ressql)){

		$id_tabla = $row[0];


		header("location: ../../salas?ok=existente");


	}

}else{


	$sa_tablas="SELECT * FROM salas_tablas WHERE id_sala='$id' ";
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

			$activar_tabla = mysqli_query($mysqli, "INSERT INTO tablas (numero_tabla, id_sala, id_usuario, nombre_ejemplar, cliente, precio, estado, precio_inicial) VALUES('$numero_tabla','$id_sala','$id_usuario','$nombre_ejemplar','$cliente','$precio','2','$precio')");

			$eliminar_tabla = mysqli_query($mysqli, "DELETE FROM salas_tablas WHERE id_sala='$id' ");

			date_default_timezone_set('America/Caracas'); 
			$fecha_activacion=date('Y-m-d h:i a'); 

			$estado_sala = mysqli_query($mysqli, "UPDATE salas SET estado = '0', fecha_activacion='$fecha_activacion' where id_sala = '$id'");

			header("location: ../../salas");

		}

	}else{


	}

}


?>