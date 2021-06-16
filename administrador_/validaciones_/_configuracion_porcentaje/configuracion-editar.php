<?php 

require("../../../conexion_/conexion.php");

$porcentaje= $_POST['porcentaje'];


$config_editar = mysqli_query($mysqli, "UPDATE porcentajes_pagos SET porcentaje = '$porcentaje' where id_porcentaje = '1'");
if ($config_editar) {

	echo 0;

}else{

	echo 2;
	
}



?>