<!doctype html>
<html>
	<head
		<meta charset='utf-8'/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div style="width:70%;margin:0px auto;">
			<h2 style="text-align:center;">Agregar Mascota</h2>
			<?php
			if(isset($_GET["error"]))
			{
				switch($_GET["error"])
				{
					case 0: echo "<div class='alert alert-success alert-dismissible'>
									<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
									<strong>Success!</strong> Registro agregado correctamente.
								  </div>";
							break;
					case 1: echo "<div class='alert alert-danger alert-dismissible'>
									<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
									<strong>Success!</strong> El tipo de archivo de imagen no es válido. No se pudo almacenar el registro.
								  </div>";
							break;
					case 2: echo "<div class='alert alert-danger alert-dismissible'>
									<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
									<strong>Success!</strong> Ocurrió un error al agregar el registro.
								  </div>";
							break;
					case 3: echo "<div class='alert alert-danger alert-dismissible'>
									<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
									<strong>Success!</strong> El tamaño de la imagen excede los 4Mb.
								  </div>";
							break;
					case 4: echo "<div class='alert alert-danger alert-dismissible'>
									<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
									<strong>Success!</strong> La resolución de la imagen no debe exceder 800x800 pixeles.
								  </div>";		
								  break;
					case 5: echo "<div class='alert alert-danger alert-dismissible'>
									<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
									<strong>Success!</strong> No se recibió la imagen, posiblemente el archivo sea muy grande.
								  </div>";				  
				}
				
			}
				echo "";
		?>
			<form action="Agregarmasc.php" method="POST" enctype="multipart/form-data">
				<div class='input-group' style="margin:10px;">
				 <span class='input-group-addon'><i class='glyphicon glyphicon-edit'></i></span>
				 <input type='text' maxlength='100' class='form-control' name='nom' placeholder='Nombre Mascota' required/>
				</div>
				
				<div class='form-group' style="margin:10px;">
					<span class='input-group-addon'><i class='glyphicon glyphicon-tags'></i></span>
					<textarea  class='form-control' placeholder='Descripción' name='descrip' rows='3' width="100%"  required></textarea>
				</div>
				
				<div class='input-group' style="margin:10px;">
				 <span class='input-group-addon'><i class='glyphicon glyphicon-upload'></i></span>
				 <input  type='file'  class='form-control' name='imagen'>
				</div>
				<div  style='text-align:right;margin:10px;' >
							<input  type='submit' class='btn btn-primary btn-default' value='Guardar' />
				</div>
			</form> 
			<div class='text-center'>
			<a href='catalogo.php'>Lista de todos los perros</a><br/>
		</div>
	    </div>
    </body>