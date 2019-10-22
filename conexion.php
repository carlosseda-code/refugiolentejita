<?php
	$servidor="localhost";
	$usuariobd="root";
	$bd="refugiolentejita";
	$pwd="";
	$conexion=new mysqli($servidor,$usuariobd,$pwd,$bd);
	if($conexion->connect_error)
		die("No se pudo conectar a la BD");
    mysqli_set_charset($conexion,"utf8");
?>