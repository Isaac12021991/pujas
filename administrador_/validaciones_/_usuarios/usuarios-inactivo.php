<?php

$id=$_GET['id'];

require("../../../conexion_/conexion.php");

$sentencia="update usuarios set estado='0' where id_usuario='$id'";
$resent=mysqli_query($mysqli,$sentencia);
if ($resent==null) {
	header("location: ../../usuarios?user=".$id."");
}else {
	header("location: ../../usuarios?user=".$id."");
}
?>