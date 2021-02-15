<?php 
include ("conexion/conexion.php");
$put=$_GET['publicacionId'];

$consulta=ConsultarProducto($_GET['publicacionId']);

  function ConsultarProducto( $publicacionId )
  {
	global $conexion;
   $sentencia="SELECT * FROM publicacion WHERE publicacionId='".$publicacionId."' ";
   $resultado= $conexion->query($sentencia) or die ("Error al consultar producto".mysqli_error($conexion)); 
   $fila=$resultado->fetch_assoc();

   return [
	$fila['publicacionTitulo'],
	$fila['publicacionAutor'],
	$fila['publicacionEstado'],
	$fila['publicacionTipo'],
	$fila['publicacionRango'],
	$fila['publicacionPortada']

   ];
  }

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>TESIS HUANCAYO</title>
  <?php require_once "scripts.php"; ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

  <script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
  <script src="js/alertifyjs/bootstrap.min.js"></script>

	<!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
	<h1 style="text-align: center; font-size: 1.5em;">EDITAR ARTICULO WEB</h1>
	<form action="conexion/modificarDatos.php" method="POST" enctype="multipart/form-data" autocomplete="off">
		<div class="container">
			<h1><img src="images/logo.png" class="img-fluid" class="rounded mx-auto d-block" alt="Responsive image" style="width:50px;" >Cátedra Tesis</h1><br>
			<input type="hidden" name="publicacionId"  value="<?php echo $_GET['publicacionId']?>">
			<div class="form-group">
				<label>TITULO</label>
				<input type="text" class="form-control" id="publicacionTitulo" name="publicacionTitulo" placeholder="Nombre de publicación" value="<?php echo $consulta[0] ?>">
			</div><br>
			<div class="form-group">
				<label>AUTOR</label>
				<input type="text" class="form-control" id="publicacionAutor" name="publicacionAutor" placeholder="Ingrese nombre" value="<?php echo $consulta[1] ?>">
			</div><br>
			<div class="form-row">
				<div class="form-group col-md-3">
					<label>ESTADO</label>
					<input type="text" class="form-control" id="publicacionEstado" name="publicacionEstado" placeholder="ACTIVO , NOACTIVO, ESPERANDO"value="<?php echo $consulta[2] ?>">
				</div>
				<div class="form-group col-md-3">
					<label>TIPO</label>
					<input type="text" class="form-control" id="publicacionTipo" name="publicacionTipo" placeholder="NOTICIA , EVENTO , ARTICULO"value="<?php echo $consulta[3] ?>">
				</div>
				<div class="form-group col-md-3">
					<label>RANGO</label>
					<input type="text" class="form-control" id="publicacionRango" name="publicacionRango" placeholder="1=mayor prioridad, 5=menor prioridad" value="<?php echo $consulta[4] ?>">
				</div>
				<div class="form-group col-md-3">
					<label>PORTADA</label>
					<input type="text" class="form-control" id="publicacionPortada" name="publicacionPortada" placeholder="SI, NO" value="<?php echo $consulta[5] ?>">
				</div>
			</div><br>
			<div class="form-group">
					<label for="archivo" class="col-sm-2 control-label">AÑADIR IMAGEN</label>
					<div class="col-sm-10">
						<input type="file" class="form-control" id="archivo" name="archivo">
					</div>
			</div><br>
			<div class="form-group">
				<label>PÁRRAFO</label>
						<a href="anadir_parrafo.php?publicacionId=<?php echo $put?>">
						<button type='button' class='btn btn-success'>AÑADIR</button></a><br>
			</div><br>
			<input type="submit" class="btn btn-primary"><br>

					<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">Orde de Parrafo</th>
							<th scope="col">Contenidos</th>
						</tr>
					</thead>
					<tbody>
							<?php
							$mientras=ordenar($_GET['publicacionId']);
							function ordenar( $publicacionId )
							{
								global $conexion;
									$sql="SELECT * from parrafo WHERE publicacionId='".$publicacionId."' ORDER BY parrafoOrden ";
									$result=mysqli_query($conexion,$sql);
									while($valor=mysqli_fetch_array($result))
										{
											echo "<tr>";
											echo "<td>"; echo $valor['parrafoOrden']; echo "</td>";
											echo "<td>"; echo $valor['parrafoTexto']; echo "</td>";
										}
								}
							?>
				</table>
		</div>
	</form><br>

	<div class="container">
		<a href="interfaz_admin.php"><button type="button" class="btn btn-primary">ATRÁS</button></a>
	</div>

</body>
</html>

