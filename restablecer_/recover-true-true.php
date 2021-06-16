<?php

$xCBcDeFGHyYAcSDgSADcNfsaGYRsdSdSDSAeDSVVVsSAKIh=$_GET['xCBcDeFGHyYAcSDgSADcNfsaGYRsdSdSDSAeDSVVVsSAKIh'];
$clave_usuario=$_POST['clave_usuario'];
$rclave_usuario=$_POST['rclave_usuario'];

require("../conexion_/conexion.php");


if($xCBcDeFGHyYAcSDgSADcNfsaGYRsdSdSDSAeDSVVVsSAKIh==null){
    
  echo "<script>location.href='../index'</script>";  
    
}else{
    


$checkemail=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE clave='$xCBcDeFGHyYAcSDgSADcNfsaGYRsdSdSDSAeDSVVVsSAKIh'");
$check_mail=mysqli_num_rows($checkemail);
if($clave_usuario==$rclave_usuario){

	if($check_mail>0){


		$chiphysi=sha1(trim($clave_usuario));
		
		$sentencia="update usuarios set clave='$chiphysi', estado='0' where clave='$xCBcDeFGHyYAcSDgSADcNfsaGYRsdSdSDSAeDSVVVsSAKIh'";
		$resent=mysqli_query($mysqli,$sentencia);

		echo "<script>alert('Su contraseña se restablecio correctamente');</script>";
		echo "<script>location.href='../index'</script>";

	}else{

		echo "<script>location.href='../restablecer'</script>";


	}


}else{

	echo "<script>alert('Las contraseñas no son iguales');</script>";
	echo "<script>location.href='javascript:history.back()'</script>";

}

}

