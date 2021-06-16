<?php 

session_start();

require("../../../conexion_/conexion.php");

$id_sala= $_POST['id_sala'];

/* CAMPO */
$nombre1 = $_POST['nombre_ejemplar1'];

if($nombre1==true){

	$nombre_ejemplar1 = $_POST['nombre_ejemplar1'];

	$campo1 = mysqli_query($mysqli, "UPDATE tablas SET nombre_ejemplar='$nombre_ejemplar1' where numero_tabla='1' ");

}else{

	$nombre_ejemplar1 = "0";

	$campo1 = mysqli_query($mysqli, "UPDATE tablas SET id_usuario='0', nombre_ejemplar='$nombre_ejemplar1', cliente=' ', precio='0' where numero_tabla='1' ");
}
/* CAMPO */



/* CAMPO */
$nombre2 = $_POST['nombre_ejemplar2'];

if($nombre2==true){

	$nombre_ejemplar2 = $_POST['nombre_ejemplar2'];

	$campo2 = mysqli_query($mysqli, "UPDATE tablas SET nombre_ejemplar='$nombre_ejemplar2' where numero_tabla='2' ");

}else{

	$nombre_ejemplar2 = "0";

	$campo2 = mysqli_query($mysqli, "UPDATE tablas SET id_usuario='0', nombre_ejemplar='$nombre_ejemplar2', cliente=' ', precio='0' where numero_tabla='2' ");

}
/* CAMPO */


/* CAMPO */
$nombre3 = $_POST['nombre_ejemplar3'];

if($nombre3==true){

	$nombre_ejemplar3 = $_POST['nombre_ejemplar3'];

	$campo3 = mysqli_query($mysqli, "UPDATE tablas SET nombre_ejemplar='$nombre_ejemplar3' where numero_tabla='3' ");

}else{

	$nombre_ejemplar3 = "0";

	$campo3 = mysqli_query($mysqli, "UPDATE tablas SET id_usuario='0', nombre_ejemplar='$nombre_ejemplar3', cliente=' ', precio='0' where numero_tabla='3' ");

}
/* CAMPO */


/* CAMPO */
$nombre4 = $_POST['nombre_ejemplar4'];

if($nombre4==true){

	$nombre_ejemplar4 = $_POST['nombre_ejemplar4'];

	$campo4 = mysqli_query($mysqli, "UPDATE tablas SET nombre_ejemplar='$nombre_ejemplar4' where numero_tabla='4' ");

}else{

	$nombre_ejemplar4 = "0";

	$campo4 = mysqli_query($mysqli, "UPDATE tablas SET id_usuario='0', nombre_ejemplar='$nombre_ejemplar4', cliente=' ', precio='0' where numero_tabla='4' ");

}
/* CAMPO */


/* CAMPO */
$nombre5 = $_POST['nombre_ejemplar5'];

if($nombre5==true){

	$nombre_ejemplar5 = $_POST['nombre_ejemplar5'];

	$campo5 = mysqli_query($mysqli, "UPDATE tablas SET nombre_ejemplar='$nombre_ejemplar4' where numero_tabla='5' ");

}else{

	$nombre_ejemplar5 = "0";

	$campo5 = mysqli_query($mysqli, "UPDATE tablas SET id_usuario='0', nombre_ejemplar='$nombre_ejemplar5', cliente=' ', precio='0' where numero_tabla='5' ");

}
/* CAMPO */


/* CAMPO */
$nombre6 = $_POST['nombre_ejemplar6'];

if($nombre6==true){

	$nombre_ejemplar6 = $_POST['nombre_ejemplar6'];

	$campo6 = mysqli_query($mysqli, "UPDATE tablas SET nombre_ejemplar='$nombre_ejemplar4' where numero_tabla='6' ");

}else{

	$nombre_ejemplar6 = "0";

	$campo6 = mysqli_query($mysqli, "UPDATE tablas SET id_usuario='0', nombre_ejemplar='$nombre_ejemplar6', cliente=' ', precio='0' where numero_tabla='6' ");

}
/* CAMPO */


/* CAMPO */
$nombre7 = $_POST['nombre_ejemplar7'];

if($nombre7==true){

	$nombre_ejemplar7 = $_POST['nombre_ejemplar7'];

	$campo7 = mysqli_query($mysqli, "UPDATE tablas SET nombre_ejemplar='$nombre_ejemplar4' where numero_tabla='7' ");

}else{

	$nombre_ejemplar7 = "0";

	$campo7 = mysqli_query($mysqli, "UPDATE tablas SET id_usuario='0', nombre_ejemplar='$nombre_ejemplar7', cliente=' ', precio='0' where numero_tabla='7' ");

}
/* CAMPO */


/* CAMPO */
$nombre8 = $_POST['nombre_ejemplar8'];

if($nombre8==true){

	$nombre_ejemplar8 = $_POST['nombre_ejemplar8'];

	$campo8 = mysqli_query($mysqli, "UPDATE tablas SET nombre_ejemplar='$nombre_ejemplar4' where numero_tabla='8' ");

}else{

	$nombre_ejemplar8 = "0";

	$campo8 = mysqli_query($mysqli, "UPDATE tablas SET id_usuario='0', nombre_ejemplar='$nombre_ejemplar8', cliente=' ', precio='0' where numero_tabla='8' ");

}
/* CAMPO */


/* CAMPO */
$nombre9 = $_POST['nombre_ejemplar9'];

if($nombre9==true){

	$nombre_ejemplar9 = $_POST['nombre_ejemplar9'];

	$campo9 = mysqli_query($mysqli, "UPDATE tablas SET nombre_ejemplar='$nombre_ejemplar4' where numero_tabla='9' ");

}else{

	$nombre_ejemplar9 = "0";

	$campo9 = mysqli_query($mysqli, "UPDATE tablas SET id_usuario='0', nombre_ejemplar='$nombre_ejemplar9', cliente=' ', precio='0' where numero_tabla='9' ");

}
/* CAMPO */


/* CAMPO */
$nombre10 = $_POST['nombre_ejemplar10'];

if($nombre10==true){

	$nombre_ejemplar10 = $_POST['nombre_ejemplar10'];

	$campo10 = mysqli_query($mysqli, "UPDATE tablas SET nombre_ejemplar='$nombre_ejemplar4' where numero_tabla='10' ");

}else{

	$nombre_ejemplar10 = "0";

	$campo10 = mysqli_query($mysqli, "UPDATE tablas SET id_usuario='0', nombre_ejemplar='$nombre_ejemplar10', cliente=' ', precio='0' where numero_tabla='10' ");

}
/* CAMPO */


/* CAMPO */
$nombre11 = $_POST['nombre_ejemplar11'];

if($nombre11==true){

	$nombre_ejemplar11 = $_POST['nombre_ejemplar11'];

	$campo11 = mysqli_query($mysqli, "UPDATE tablas SET nombre_ejemplar='$nombre_ejemplar4' where numero_tabla='11' ");

}else{

	$nombre_ejemplar11 = "0";

	$campo11 = mysqli_query($mysqli, "UPDATE tablas SET id_usuario='0', nombre_ejemplar='$nombre_ejemplar11', cliente=' ', precio='0' where numero_tabla='11' ");

}
/* CAMPO */


/* CAMPO */
$nombre12 = $_POST['nombre_ejemplar12'];

if($nombre12==true){

	$nombre_ejemplar12 = $_POST['nombre_ejemplar12'];

	$campo12 = mysqli_query($mysqli, "UPDATE tablas SET nombre_ejemplar='$nombre_ejemplar4' where numero_tabla='12' ");

}else{

	$nombre_ejemplar12 = "0";

	$campo12 = mysqli_query($mysqli, "UPDATE tablas SET id_usuario='0', nombre_ejemplar='$nombre_ejemplar12', cliente=' ', precio='0' where numero_tabla='12' ");

}
/* CAMPO */


/* CAMPO */
$nombre13 = $_POST['nombre_ejemplar13'];

if($nombre13==true){

	$nombre_ejemplar13 = $_POST['nombre_ejemplar13'];

	$campo13 = mysqli_query($mysqli, "UPDATE tablas SET nombre_ejemplar='$nombre_ejemplar4' where numero_tabla='13' ");

}else{

	$nombre_ejemplar13 = "0";

	$campo13 = mysqli_query($mysqli, "UPDATE tablas SET id_usuario='0', nombre_ejemplar='$nombre_ejemplar13', cliente=' ', precio='0' where numero_tabla='13' ");

}
/* CAMPO */


/* CAMPO */
$nombre14 = $_POST['nombre_ejemplar14'];

if($nombre14==true){

	$nombre_ejemplar14 = $_POST['nombre_ejemplar14'];

	$campo14 = mysqli_query($mysqli, "UPDATE tablas SET nombre_ejemplar='$nombre_ejemplar4' where numero_tabla='14' ");

}else{

	$nombre_ejemplar14 = "0";

	$campo14 = mysqli_query($mysqli, "UPDATE tablas SET id_usuario='0', nombre_ejemplar='$nombre_ejemplar14', cliente=' ', precio='0' where numero_tabla='14' ");

}
/* CAMPO */


if ($campo1) {

	echo 0;

}else{

	echo 1;

}


?>