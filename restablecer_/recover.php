<?php

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

require("../conexion_/conexion.php");

$correo=$_POST['correo'];

$correo_encrip=sha1(trim($correo));

$checkemail=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE email='$correo'");
$check_mail=mysqli_num_rows($checkemail);
if($check_mail>0){


	//-----ENVIADOR DE CORREOS---------
	$carta =

	" 
	<br/> 
	<!DOCTYPE html>
	<html lang='es'>
	<head>
	<meta charset='utf-8'>
	<title>holi</title>
	</head>
	<body style='background-color: black '>

	<!-- Inicio-->
	<table style='max-width: 600px; padding: 10px; margin:0 auto; border-collapse: collapse;'>
	<tr>
	<td style='background-color: #ecf0f1'>
	<div style='color: #34495e; margin: 4% 10% 2%; text-align: justify;font-family: sans-serif'>
	<center><img src='http://subastahipica.com/img/logo.png' width='310'></center>
	<br>
	<hr>
	<center><p>Acabas de solicitar un codigo para restablecer tu contraseña</p></center>
	<br>
	<br>
	<div style='width: 100%; text-align: center'>
	<a style='text-decoration: none; border-radius: 5px; padding: 11px 23px; color: white; background-color: #3498db' href='http://subastahipica.com/restablecer_/recover-true-data?xCBcDeFGHyYAcSDgSADcNfsaGYRsdSdSDSAeDSVVVsSAKIh=".$correo_encrip."&1C2H3I4P5H6Y7S8I9P1R=2O3G4R5A6M7A8C8I1O2N3LATINCLUB'>RESTABLECER CONTRASEÑA</a> 
	<p>Click al botón para restablecer tu contraseña</p>
	</div>
	<br>
	<p>Si usted no solicito el código de restablecimiento de contraseña por favor comunicate con soporte para verificar si fue un error u otro usuario está entrando a tu cuenta.</p>
	<br>	
	<hr>
	<br>
	<p style='color: #b3b3b3; font-size: 12px; text-align: center;margin: 30px 0 0'>www.subastahipica.com</p>
	</div>
	</td>
	</tr>
	</table>
	<!-- Fin -->

	</body>
	</html>     



	";

	$mail = new PHPMailer(true);


	try {

		$mail->SMTPDebug = 0;  
		$mail->isSMTP();                                            
		$mail->Host       = 'smtp.gmail.com';   
		$mail->SMTPAuth   = true;
		$mail->Username   = 'soportelatinclub@gmail.com';                     
		$mail->Password   = 'soportelatinclub20';                               
		$mail->SMTPSecure = 'tls';
		$mail->Port       = 587;



		$mail->setFrom('soportelatinclub@gmail.com', 'Latin Club');
		$mail->addAddress($correo);  

		$mail->isHTML(true);                                
		$mail->Subject = 'RESTABLECER CLAVE';
		$mail->Body    = ($carta);

		$mail->SMTPOptions = array(
			'ssl' => array(
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true
			)
		);

		$mail->send();


	} catch (Exception $e) {
		echo 'Message Error: ', $mail->ErrorInfo;
	}

	//-----ENVIADOR DE CORREOS-----


	$sentencia="update usuarios set estado='3', clave='$correo_encrip' where email='$correo'";
	$resent=mysqli_query($mysqli,$sentencia);

	echo 1;


}else{

	echo 0;

}




?>
