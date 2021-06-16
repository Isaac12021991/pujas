<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

require("../conexion_/conexion.php");

$ip=$_SERVER['REMOTE_ADDR'];

$nombre_apellido=$_POST['nombre_apellido'];
$email=$_POST['email'];
$user=$_POST['user'];
$pass=$_POST['pass'];


date_default_timezone_set('America/Caracas');
$ultima_conexion = date('Y-m-d h:i a');

$checkemail=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE email='$email'");
$check_mail=mysqli_num_rows($checkemail);
if($check_mail>0){

	echo 0;


}else{

	//------------------------------ENVIADOR DE CORREOS------------------------------
	$carta =

	'
	<!DOCTYPE html>
	<html lang="en">
	<body>

	<div style="border: 2px solid #01420B; background-color:#01420B; padding: 10px;height: 90px;margin-top: -50px;">
	<center>
	<img src="http://subastahipica.com/img/logo.png" style="max-height: 70px;">
	</center>
	</div>
	<div style="border: 2px solid #01420B; padding-top: 15px;padding-left: 10px;padding-bottom: 50px;width: auto;height: 200px">
	<span style="float: left;font-size: 17px;width: 100%;">

	Hola '.$nombre_apellido.',
	<br>
	¡Felicidades! Has creado tu cuenta en subastahipica.com con éxito.
	<br>
	<br>
	Gracias por registrarte con nosotros. Su nueva cuenta ha sido configurada.
	<br>
	Para iniciar sesión, visite https://subastahipica.com
	<br>
	<br>
	Esperamos verte pronto.
	</span>
	</div> 

	</body>
	</html> 

	';

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
		$mail->addAddress($email);  

		$mail->isHTML(true);                                
		$mail->Subject = 'Se ha creado su cuenta';
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

	//------------------------------ENVIADOR DE CORREOS------------------------------

	$latin=sha1(trim($pass));

	$query=mysqli_query($mysqli,"INSERT INTO usuarios (nombre_apellido, email, usuario, clave, saldo, ip, fecha_registro, ultima_conexion, estado, rol) VALUES('$nombre_apellido','$email','$user','$latin','0','$ip','$ultima_conexion','$ultima_conexion','0','2')");

	echo 1;

}




?>
