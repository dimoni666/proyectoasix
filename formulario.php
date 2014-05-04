<?php

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$email = $_POST["email"];
$consulta = $_POST["motivo"];

$conect = mysql_connect("localhost","asixuser","4s1xP4ssWd");
mysql_select_db("asixdb",$conect) OR die ("no se ha podido conectar");

$insert = "INSERT INTO consultas VALUE ('$nombre','$apellidos','$email','$consulta');";

$query = mysql_query($insert,$conect);
if ($query){
	$message = "Su consulta ha sido enviada correctamente";
	echo "<script type='text/javascript'>alert('$message');</script>";
}else {
	$message = "La consulta no ha podido realizarse. Intentelo de nuevo mas tarde.";
	echo "<script type='text/javascript'>alert('$message');</script>";
}

?>