<?php 

session_start();

require("../../conexion_/conexion.php");

$id_usuario=$_SESSION['id_usuario'];

$user="SELECT * FROM usuarios WHERE id_usuario ='$id_usuario'";
$user_=mysqli_query($mysqli,$user);


while ($usuario=mysqli_fetch_row ($user_)){

	$saldo = $usuario[5];

}

?>

<button class="btn btn-warning my-2 my-sm-0" style=" background-color: #072B00; border-radius: 10px; color: #D6A602;" type="submit"><center>MI SALDO: $<?php echo $saldo ?> USD</center></button>