<?php 

session_start();

require("../../../conexion_/conexion.php");

$id_usuario= $_POST['id_usuario'];
$id_sala= $_POST['id_sala'];

$num_tabla= $_POST['num_tabla'];




if (isset($_SESSION['token'])){ 

	if (isset($_POST['token'])){ 

		if ($_POST['token'] != $_SESSION['token']){ 

		}else{


			/*------------------------------------------------------------------------------------------------*/
			$query = mysqli_query($mysqli, "SELECT * FROM tablas WHERE id_sala='$id_sala' and numero_tabla='$num_tabla' ");
			$data = mysqli_fetch_array($query);

			$id_tabla = $data['id_tabla'];
			$numero_tabla = $data['numero_tabla'];
			$id_sala = $data['id_sala'];
			$saldo_a = $data['precio'];
			$id_usuario=$_SESSION['id_usuario'];
			/*------------------------------------------------------------------------------------------------*/


			/*------------------------------------------------------------------------------------------------*/
			$query2 = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE id_usuario='$id_usuario'");
			$data2 = mysqli_fetch_array($query2);

			$id_usuario_ = $data2['id_usuario'];
			$usuario = $data2['usuario'];
			$saldo = $data2['saldo'];


			$checkemail=mysqli_query($mysqli,"SELECT * FROM historial_tiempo WHERE id_sala='$id_sala' and id_tabla='$numero_tabla'");
			$check_mail=mysqli_num_rows($checkemail);
			if($check_mail>0){}else{$insertar = mysqli_query($mysqli, "INSERT INTO historial_tiempo (id_sala, id_tabla, tiempo) VALUES('$id_sala','$numero_tabla','0')");}
			/*------------------------------------------------------------------------------------------------*/


	

				$money_x2=$saldo_a-5;
				$money_descontado=$saldo+5;

				if($saldo>=$money_x2){

					$query11 = mysqli_query($mysqli, "SELECT * FROM tablas WHERE id_tabla = '$id_tabla'");
					$datas11 = mysqli_fetch_array($query11);
					$desc = $datas11['precio'];
					$id_us = $datas11['id_usuario'];
					$men5=$desc;

					$user = mysqli_query($mysqli, "UPDATE usuarios SET saldo = saldo+$men5 where id_usuario = '$id_usuario_'");

					$pujar = mysqli_query($mysqli, "UPDATE tablas SET id_usuario = '0', cliente = '', precio = '0' where id_tabla = '$id_tabla'");


					date_default_timezone_set('America/Caracas'); 
					$fecha = date('H:i:s');
					$nuevafecha = strtotime ( '+3 second' , strtotime ( $fecha ) ) ;
					$nuevafecha = date ( 'H:i:s' , $nuevafecha );
					/*--------------------------------------------------------------------------------------------------------------------------------------*/
					$editar = mysqli_query($mysqli, "UPDATE historial_tiempo SET tiempo = '$nuevafecha' where id_sala='$id_sala' and id_tabla='$numero_tabla'");
					/*--------------------------------------------------------------------------------------------------------------------------------------*/

					echo 0; 

				}else{

					echo 1;

				}


			


		} 

	}

}


?>