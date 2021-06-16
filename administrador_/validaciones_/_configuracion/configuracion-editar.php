<?php 

require("../../../conexion_/conexion.php");

$tiempo_puja= $_POST['tiempo_puja'];


$checkemail=mysqli_query($mysqli,"SELECT * FROM configuracion WHERE $tiempo_puja>'0'");
$check_mail=mysqli_num_rows($checkemail);
if($check_mail>0){


	$config_editar = mysqli_query($mysqli, "UPDATE configuracion SET tiempo_puja = '$tiempo_puja' where id_configuracion = '1'");
	if ($config_editar) {

		echo 0;

	}else{

		echo 2;
		
	}


}else{

	echo 1;

}


?>