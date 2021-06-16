<?php 

session_start();

require("../../../conexion_/conexion.php");

$id_usuario=$_SESSION['id_usuario'];
$titulo = $_POST['titulo'];
$texto = $_POST['texto'];


date_default_timezone_set('America/Caracas');  
$fecha = date('Y-m-d h:i a');


$insertar = mysqli_query($mysqli, "INSERT INTO soporte (id_usuario, titulo, texto, estado, fecha) VALUES('$id_usuario','$titulo', '$texto', '0', '$fecha')");


if ($insertar) {

	echo 0;

}else{

	echo 2;

}




?>