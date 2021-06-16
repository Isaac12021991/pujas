<?php 

session_start();

require("../../../conexion_/conexion.php");

$id_usuario = $_SESSION['id_usuario'];
$nombre_apellido = $_POST['nombre_apellido'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];

if($id_usuario==null || $nombre_apellido==null || $usuario==null || $email==null){

header("location: ../../../index");

}else{

$perfil_editar = mysqli_query($mysqli, "UPDATE usuarios SET nombre_apellido = '$nombre_apellido', usuario = '$usuario', email = '$email' where id_usuario = '$id_usuario'");
if ($perfil_editar) {
	echo 0;
}else{
	echo 1;
}

}





?>