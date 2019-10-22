<?php
	
    require_once "conexion.php";
	
	$imagen="";
	if (is_uploaded_file($_FILES["imagen"]["tmp_name"]))
	{		
		$tipo=$_FILES["imagen"]["type"];
		$tam=$_FILES["imagen"]["size"];
		$info=getimagesize($_FILES["imagen"]["tmp_name"]);
		$ancho=$info[0];
		$alto=$info[1];
		$res=0;
		if($alto>800 || $ancho>1024)
			header("location:index.php?error=4");

		if ($tipo=="image/jpeg" || $tipo=="image/jpg" || $tipo=="image/gif" || $tipo=="image/png")
		{
			 
			$imagen=$conexion->real_escape_string(file_get_contents($_FILES["imagen"]["tmp_name"]));				
		}
		else
		{
			header("location:index.php?error=1");
		}
		if($tam>2000000)
		{
			header("location:index.php?error=3");
		}
	}
	else
		header("location:index.php?error=5");
	$nom=$_POST["nom"];
	$desc=$_POST["descrip"];
	
	$cmd="insert into perros(nombre, descrip, imagen, tipo) values ('$nom','$desc','$imagen','$tipo')";
	$resp=$conexion->query($cmd);
	if($resp==1)
	{
		header("location:index.php?error=0");
		
	}
	else
	{
		header("location:index.php?error=2");	
	}
?>