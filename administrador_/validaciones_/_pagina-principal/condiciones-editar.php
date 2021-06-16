<?php 

require("../../../conexion_/conexion.php");

$condiciones= $_POST['condiciones'];



$condiciones_ = mysqli_query($mysqli, "UPDATE pagina_principal SET condiciones = '$condiciones' where id_principal = '1'");
if ($condiciones_) {

	echo 0;

}else{

	echo 1;

}



?>