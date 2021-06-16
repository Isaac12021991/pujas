<?php 

session_start();

require("../conexion_/conexion.php");



$id_tabla= $_POST['id_tabla'];


$query = mysqli_query($mysqli, "SELECT * FROM tablas WHERE id_tabla='$id_tabla'");

			$data = mysqli_fetch_array($query);

			$id_tabla = $data['id_tabla'];
			$numero_tabla = $data['numero_tabla'];
			$saldo_a = $data['precio'];
			$id_usuario = $data['id_usuario'];

			$user = mysqli_query($mysqli, "UPDATE tablas SET precio = '0', id_usuario = '0', cliente = '', in_activo = '0' where id_tabla = '$id_tabla'");

			$pujar = mysqli_query($mysqli, "UPDATE usuarios SET saldo = saldo-$saldo_a where id_usuario = '$id_usuario'");


echo "Test";


?>