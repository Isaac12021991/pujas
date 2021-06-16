<?php

session_start();

require("../conexion_/conexion.php");

$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$ip=$_SERVER['REMOTE_ADDR'];

$latinclub=sha1(trim($clave));

$sql=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE usuario='$usuario'");

if($f=mysqli_fetch_array($sql)){

	if($latinclub==$f['clave']){

		$_SESSION['id_usuario']=$f['id_usuario'];
		$_SESSION['nombre_apellido']=$f['nombre_apellido'];
		$_SESSION['email']=$f['email'];
		$_SESSION['usuario']=$f['usuario'];
		$_SESSION['clave']=$f['clave'];
		$_SESSION['saldo']=$f['saldo'];
		$_SESSION['ip']=$f['ip'];
		$_SESSION['estado']=$f['estado'];
		$_SESSION['rol']=$f['rol'];

		date_default_timezone_set('America/Caracas');    
		$ultima_conexion = date('Y-m-d h:i a');


		if($f['rol']==1){

			mysqli_query($mysqli, "UPDATE usuarios SET ultima_conexion = '$ultima_conexion', ip = '$ip' WHERE id_usuario ='".$f['id_usuario']."'");
			echo 0;

		}else{


			if($f['estado']==0){

				mysqli_query($mysqli, "UPDATE usuarios SET ultima_conexion = '$ultima_conexion', ip = '$ip' WHERE id_usuario ='".$f['id_usuario']."'");
				echo 1;

			}else if($f['estado']==1){

				echo 4;

			}else{

				echo 2;
			}


		}


	}else{

		echo 3;

	}


}else{

	echo 3;

}





?>    

