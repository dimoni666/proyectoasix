<?php

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$email = $_POST["email"];
$consulta = $_POST["consulta"];

$conect = mysql_connect("localhost","userasix","4s1xP4ssWd");
mysql_select_db("asixdb",$conect) OR die ("no se ha podido conectar");

$insert = "INSERT INTO consultas VALUE ($nombre,$apellidos,$email,$consulta);";
mysql_query($insert,$conect);


?>