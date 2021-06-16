<?php 

require("../../../conexion_/conexion.php");

$id_soporte= $_POST['id_soporte'];
$respuesta= $_POST['respuesta'];



$config_editar = mysqli_query($mysqli, "UPDATE soporte SET respuesta = '$respuesta', estado='1' where id_soporte = '$id_soporte'");
if ($config_editar) {

	echo 0;

}else{

	echo 2;

}





?>