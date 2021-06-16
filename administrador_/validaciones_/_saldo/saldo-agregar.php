<?php

require("../../../conexion_/conexion.php");

$id_usuario=$_POST['id_usuario'];
$saldo=$_POST['saldo'];

date_default_timezone_set('America/Caracas');
$fecha = date('Y-m-d h:i:s');

$sql="SELECT * FROM usuarios WHERE id_usuario='$id_usuario'";
$ressql=mysqli_query($mysqli,$sql);
while ($row=mysqli_fetch_row ($ressql)){

	$saldo_a = $row[5];

}

$money=$saldo_a+$saldo;

$saldo_editar = mysqli_query($mysqli, "UPDATE usuarios SET saldo = '$money' where id_usuario = '$id_usuario'");
if ($saldo_editar) {
	echo 0;
}else{
	echo 1;
}



?>
