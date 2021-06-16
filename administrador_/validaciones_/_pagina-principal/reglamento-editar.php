<?php 

require("../../../conexion_/conexion.php");

$reglamento= $_POST['reglamento'];



$reglamento_ = mysqli_query($mysqli, "UPDATE pagina_principal SET reglamentos = '$reglamento' where id_principal = '1'");
if ($reglamento_) {

	echo 0;

}else{

	echo 1;

}



?>