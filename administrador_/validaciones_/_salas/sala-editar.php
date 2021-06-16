<?php 

session_start();

require("../../../conexion_/conexion.php");

$id_sala2= $_POST['id_sala2'];
$numero_sala2 = $_POST['numero_sala2'];
$tipo = $_POST['tipo'];
$anuncio12 = $_POST['anuncio12'];
$anuncio22 = $_POST['anuncio22'];
$hipodromo2 = $_POST['hipodromo2'];
$distancia2 = $_POST['distancia2'];
$pote_tablazo2 = $_POST['pote_tablazo2'];
$pote2 = $_POST['pote2'];

$sala_editar = mysqli_query($mysqli, "UPDATE salas SET numero_sala = '$numero_sala2', tipo_remate = '$tipo', anuncio1 = '$anuncio12', anuncio2='$anuncio22', hipodromo='$hipodromo2', distancia='$distancia2', pote_tablazo='$pote_tablazo2', pote='$pote2' where id_sala = '$id_sala2'");
if ($sala_editar) {
	echo 0;
}else{
	echo 1;
}


?>