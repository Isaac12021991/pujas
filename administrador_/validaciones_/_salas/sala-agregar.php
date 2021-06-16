<?php 

session_start();

require("../../../conexion_/conexion.php");

/* SALAS */
$numero_sala = $_POST['numero_sala'];
$tipo_remate = $_POST['tipo_remate'];
$anuncio1 = $_POST['anuncio1'];
$anuncio2 = $_POST['anuncio2'];
$hipodromo = $_POST['hipodromo'];
$distancia = $_POST['distancia'];
$pote_tablazo = $_POST['pote_tablazo'];
$pote = $_POST['pote'];
/* SALAS */




/* CAMPO */
$nombre1 = $_POST['nombre_ejemplar1'];

if($nombre1==true){

$nombre_ejemplar1 = $_POST['nombre_ejemplar1'];

}else{

$nombre_ejemplar1 = "0";

}
/* CAMPO */



/* CAMPO */
$nombre2 = $_POST['nombre_ejemplar2'];

if($nombre2==true){

$nombre_ejemplar2 = $_POST['nombre_ejemplar2'];

}else{

$nombre_ejemplar2 = "0";

}
/* CAMPO */


/* CAMPO */
$nombre3 = $_POST['nombre_ejemplar3'];

if($nombre3==true){

$nombre_ejemplar3 = $_POST['nombre_ejemplar3'];

}else{

$nombre_ejemplar3 = "0";

}
/* CAMPO */


/* CAMPO */
$nombre4 = $_POST['nombre_ejemplar4'];

if($nombre4==true){

$nombre_ejemplar4 = $_POST['nombre_ejemplar4'];

}else{

$nombre_ejemplar4 = "0";

}
/* CAMPO */


/* CAMPO */
$nombre5 = $_POST['nombre_ejemplar5'];

if($nombre5==true){

$nombre_ejemplar5 = $_POST['nombre_ejemplar5'];

}else{

$nombre_ejemplar5 = "0";

}
/* CAMPO */


/* CAMPO */
$nombre6 = $_POST['nombre_ejemplar6'];

if($nombre6==true){

$nombre_ejemplar6 = $_POST['nombre_ejemplar6'];

}else{

$nombre_ejemplar6 = "0";

}
/* CAMPO */


/* CAMPO */
$nombre7 = $_POST['nombre_ejemplar7'];

if($nombre7==true){

$nombre_ejemplar7 = $_POST['nombre_ejemplar7'];

}else{

$nombre_ejemplar7 = "0";

}
/* CAMPO */


/* CAMPO */
$nombre8 = $_POST['nombre_ejemplar8'];

if($nombre8==true){

$nombre_ejemplar8 = $_POST['nombre_ejemplar8'];

}else{

$nombre_ejemplar8 = "0";

}
/* CAMPO */


/* CAMPO */
$nombre9 = $_POST['nombre_ejemplar9'];

if($nombre9==true){

$nombre_ejemplar9 = $_POST['nombre_ejemplar9'];

}else{

$nombre_ejemplar9 = "0";

}
/* CAMPO */


/* CAMPO */
$nombre10 = $_POST['nombre_ejemplar10'];

if($nombre10==true){

$nombre_ejemplar10 = $_POST['nombre_ejemplar10'];

}else{

$nombre_ejemplar10 = "0";

}
/* CAMPO */


/* CAMPO */
$nombre11 = $_POST['nombre_ejemplar11'];

if($nombre11==true){

$nombre_ejemplar11 = $_POST['nombre_ejemplar11'];

}else{

$nombre_ejemplar11 = "0";

}
/* CAMPO */


/* CAMPO */
$nombre12 = $_POST['nombre_ejemplar12'];

if($nombre12==true){

$nombre_ejemplar12 = $_POST['nombre_ejemplar12'];

}else{

$nombre_ejemplar12 = "0";

}
/* CAMPO */


/* CAMPO */
$nombre13 = $_POST['nombre_ejemplar13'];

if($nombre13==true){

$nombre_ejemplar13 = $_POST['nombre_ejemplar13'];

}else{

$nombre_ejemplar13 = "0";

}
/* CAMPO */


/* CAMPO */
$nombre14 = $_POST['nombre_ejemplar14'];

if($nombre14==true){

$nombre_ejemplar14 = $_POST['nombre_ejemplar14'];

}else{

$nombre_ejemplar14 = "0";

}
/* CAMPO */


$checkemail=mysqli_query($mysqli,"SELECT * FROM salas WHERE numero_sala='$numero_sala'");
$check_mail=mysqli_num_rows($checkemail);
if($check_mail>0){

	echo 1;


}else{

	$insertar = mysqli_query($mysqli, "INSERT INTO salas (numero_sala, tipo_remate, anuncio1, anuncio2, hipodromo, distancia, pote_tablazo, pote, estado) VALUES('$numero_sala','$tipo_remate', '$anuncio1', '$anuncio2', '$hipodromo', '$distancia', '$pote_tablazo', '$pote', '1')");

	if ($insertar) {

		$sala_max="SELECT max(id_sala) FROM salas";
		$sql_sala_max=mysqli_query($mysqli,$sala_max);
		while ($max=mysqli_fetch_row ($sql_sala_max)){

			$id_sala= $max[0];

			$campo1 = mysqli_query($mysqli, "INSERT INTO salas_tablas (numero_tabla, id_sala, id_usuario, nombre_ejemplar, cliente, precio, estado) VALUES('1','$id_sala', '', '$nombre_ejemplar1', '', '0', '2')");

			$campo2 = mysqli_query($mysqli, "INSERT INTO salas_tablas (numero_tabla, id_sala, id_usuario, nombre_ejemplar, cliente, precio, estado) VALUES('2','$id_sala', '', '$nombre_ejemplar2', '', '0', '2')");

			$campo3 = mysqli_query($mysqli, "INSERT INTO salas_tablas (numero_tabla, id_sala, id_usuario, nombre_ejemplar, cliente, precio, estado) VALUES('3','$id_sala', '', '$nombre_ejemplar3', '', '0', '2')");

			$campo4 = mysqli_query($mysqli, "INSERT INTO salas_tablas (numero_tabla, id_sala, id_usuario, nombre_ejemplar, cliente, precio, estado) VALUES('4','$id_sala', '', '$nombre_ejemplar4', '', '0', '2')");

			$campo5 = mysqli_query($mysqli, "INSERT INTO salas_tablas (numero_tabla, id_sala, id_usuario, nombre_ejemplar, cliente, precio, estado) VALUES('5','$id_sala', '', '$nombre_ejemplar5', '', '0', '2')");

			$campo6 = mysqli_query($mysqli, "INSERT INTO salas_tablas (numero_tabla, id_sala, id_usuario, nombre_ejemplar, cliente, precio, estado) VALUES('6','$id_sala', '', '$nombre_ejemplar6', '', '0', '2')");

			$campo7 = mysqli_query($mysqli, "INSERT INTO salas_tablas (numero_tabla, id_sala, id_usuario, nombre_ejemplar, cliente, precio, estado) VALUES('7','$id_sala', '', '$nombre_ejemplar7', '', '0', '2')");

			$campo8 = mysqli_query($mysqli, "INSERT INTO salas_tablas (numero_tabla, id_sala, id_usuario, nombre_ejemplar, cliente, precio, estado) VALUES('8','$id_sala', '', '$nombre_ejemplar8', '', '0', '2')");

			$campo9 = mysqli_query($mysqli, "INSERT INTO salas_tablas (numero_tabla, id_sala, id_usuario, nombre_ejemplar, cliente, precio, estado) VALUES('9','$id_sala', '', '$nombre_ejemplar9', '', '0', '2')");

			$campo10 = mysqli_query($mysqli, "INSERT INTO salas_tablas (numero_tabla, id_sala, id_usuario, nombre_ejemplar, cliente, precio, estado) VALUES('10','$id_sala', '', '$nombre_ejemplar10', '', '0', '2')");

			$campo11 = mysqli_query($mysqli, "INSERT INTO salas_tablas (numero_tabla, id_sala, id_usuario, nombre_ejemplar, cliente, precio, estado) VALUES('11','$id_sala', '', '$nombre_ejemplar11', '', '0', '2')");

			$campo12 = mysqli_query($mysqli, "INSERT INTO salas_tablas (numero_tabla, id_sala, id_usuario, nombre_ejemplar, cliente, precio, estado) VALUES('12','$id_sala', '', '$nombre_ejemplar12', '', '0', '2')");

			$campo13 = mysqli_query($mysqli, "INSERT INTO salas_tablas (numero_tabla, id_sala, id_usuario, nombre_ejemplar, cliente, precio, estado) VALUES('13','$id_sala', '', '$nombre_ejemplar13', '', '0', '2')");

			$campo14 = mysqli_query($mysqli, "INSERT INTO salas_tablas (numero_tabla, id_sala, id_usuario, nombre_ejemplar, cliente, precio, estado) VALUES('14','$id_sala', '', '$nombre_ejemplar14', '', '0', '2')");


		}

		echo 0;

	}else{

		echo 2;

	}

}

?>