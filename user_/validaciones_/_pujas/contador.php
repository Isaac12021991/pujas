<?php 



$fecha_actual = date("d-m-Y");
$timestamp = strtotime($fecha_actual);
$minutos = strtotime ( '+16 minutes' , strtotime ($timestamp));

$tiempo_conexion2 = $_POST['tiempo_conexion2'];

// Tiempo en time

$fecha_concatenada = strtotime($tiempo_conexion2);
$fecha_fin = $minutos + $fecha_concatenada;


// tiempo normal

$date_inicio = date('d-m-Y H:i:s', $fecha_concatenada);
$date_fin = date('d-m-Y H:i:s', $fecha_fin);


$date1 = new DateTime($date_fin);
$date2 = new DateTime("now");

$diff = $date1->diff($date2);

if (time() > $fecha_fin):

	echo 'Tiempo agotado';
	
	else:

	echo 'Quedan '.$diff->h.' Hora, '.$diff->i.' Minutos, '.$diff->s.' segundos';

	endif;


?>