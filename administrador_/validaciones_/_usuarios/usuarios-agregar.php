<?php

session_start();
require("../../../conexion_/conexion.php");

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$ip=$_POST['ip'];
$telefono=$_POST['telefono'];
$pais=$_POST['pais'];
$correo=$_POST['correo'];
$clave=$_POST['clave'];
$rol=$_POST['rol'];


date_default_timezone_set('America/Caracas');
$ultima_conexion = date('Y-m-d h:i:s');

$checkemail=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE correo='$correo'");
$check_mail=mysqli_num_rows($checkemail);
if($check_mail>0){

	echo 0;


}else{

	$chiphysi=sha1(trim($clave));

	$query=mysqli_query($mysqli,"INSERT INTO usuarios (foto, nombre, apellido, ip, telefono, pais, correo, clave, fecha_registro, ultima_conexion, estado, rol) VALUES('default.png','$nombre','$apellido','$ip','$telefono','$pais','$correo','$chiphysi','$ultima_conexion','$ultima_conexion','0','$rol')");

	echo 1;

}




?>
