<?php
	require_once "conexion.php";
	$id=$_GET["id"];
	$cmd="select imagen, tipo from perros where id=$id";
	$tab=$conexion->query($cmd);
	$reg=$tab->fetch_assoc();
	header("Content-type:".$reg["tipo"]);
	echo $reg["imagen"];
?>