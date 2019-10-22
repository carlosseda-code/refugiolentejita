<!doctype html>
<html>
	<head
		<meta charset='utf-8'/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<style>
			.contenedor{
				width:80%;
				margin:0px auto;
				display:table;
				border-spacing:10px;
			}
			.prod{
				box-sizing:border-box;
				width:30%;
				display:table-cell;
				border:solid gray 1px;
			}
			.vacio{
				box-sizing:border-box;
				width:30%;
				display:table-cell;
				
				
			}
			.prod>img{
				width:100%; 
				padding:10px;
			}
		</style>
	</head>
	<body>
		<?php
			
			require_once "conexion.php";
			
			$cmd="select id,nombre,descrip from perros";
			$tab=$conexion->query($cmd);
			$columnas=0;
			if($tab->num_rows==0) return;
			while($reg=$tab->fetch_assoc())
			{
				$id=$reg["id"];
				$nom=$reg["nombre"];
				$desc=$reg["descrip"];
				$columnas++;	
				if($columnas==1)echo "<div class='contenedor'>";
				echo "<div class='prod'>
						<img src='imagen.php?id=$id' />
						<h4> $id: $nom </h4>
						<p>$desc</p>
					  </div>";
				if($columnas==3)
					{
						echo "</div>";$columnas=0;
					}	
				
			}
			while($columnas<3)
			{
				echo "<div class='vacio'>
						&nbsp;
					  </div>";
					  $columnas++;
			}
		$conexion->close();
		?>
	</body>
</html>	
