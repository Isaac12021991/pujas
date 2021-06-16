<?php 

require("../../../conexion_/conexion.php");

$campo1= $_POST['campo1'];
$campo2= $_POST['campo2'];
$campo3= $_POST['campo3'];
$campo4= $_POST['campo4'];
$campo5= $_POST['campo5'];
$campo6= $_POST['campo6'];


$reglas_ = mysqli_query($mysqli, "UPDATE reglas_sala SET campo1 = '$campo1', campo2 = '$campo2', campo3 = '$campo3', campo4 = '$campo4', campo5 = '$campo5', campo6 = '$campo6' where id_regla = '1'");
if ($reglas_) {

	echo 0;

}else{

	echo 1;

}



?>