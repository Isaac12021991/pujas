<?php

require("../conexion_/conexion.php");

$correo_boletin=$_POST['correo_boletin'];


date_default_timezone_set('America/Caracas');
$fecha_registro = date('Y-m-d h:i a');

$checkemail=mysqli_query($mysqli,"SELECT * FROM boletines WHERE correo='$correo_boletin'");
$check_mail=mysqli_num_rows($checkemail);
if($check_mail>0){

	echo 0;

}else{

	$query=mysqli_query($mysqli,"INSERT INTO boletines (correo, descripcion, fecha_registro) VALUES('$correo_boletin','Quiero recibir notificaciones','$fecha_registro')");

	echo 1;

}

?>
