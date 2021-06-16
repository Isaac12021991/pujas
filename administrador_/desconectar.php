<!---SEGURIDAD DE SALIDA------>
<?php 
session_start();
if($_SESSION['correo']){	
	session_destroy();
	header("location:../index");
}
else{
	header("location:../index");
}
?>
<!---SEGURIDAD DE SALIDA------>