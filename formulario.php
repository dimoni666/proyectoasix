<?php

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$email = $_POST["email"];
$consulta = $_POST["consulta"];

$conect = mysql_connect("jaume.sexylinux.net/asix/","userasix","4s1xP4ssWd");
mysql_select_db("asix",$conect) OR die ("no se ha podido conectar");

$sql = "INSERT INTO consultas VALUE ('$nombre','$apellidos','$email','$consulta')"



?>