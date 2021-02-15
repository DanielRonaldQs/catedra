
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>TESIS HUANCAYO</title>
		<?php require_once "scripts.php"; ?>
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
	</head>
<body>
	<h1 style="text-align: center; font-size: 1.5em;">SUBIR ARTICULO A LA WEB</h1>
	<form id="frmsubir">
		<div class="container">
			<h1><img src="images/logo.png" class="img-fluid" class="rounded mx-auto d-block" alt="Responsive image" style="width:50px;">Cátedra Tesis</h1><br>
			<div class="form-group">
				<label for="titulo">TITULO</label>
				<input type="text" class="form-control" id="titulo" placeholder="Nombre de publicación">
			</div><br>
			<div class="form-group">
				<label for="autor">AUTOR</label>
				<input type="text" class="form-control" id="autor" placeholder="Ingrese nombre">
			</div><br>
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="tipo">TIPO</label>
					<select id="tipo" class="form-control">
						<option selected>...</option>
						<option>NOTICIA</option>
						<option>EVENTO</option>
						<option>ARTICULO</option>
					</select>
				</div>
				<div class="form-group col-md-4">
					<label for="rango">RANGO</label>
					<select class="form-control" id="rango">
					<option selected>...</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					</select>
				</div>
				<div class="form-group col-md-4">
					<label for="portada">PORTADA</label>
					<select id="portada" class="form-control">
						<option selected>...</option>
						<option>SI</option>
						<option>NO</option>
					</select>
				</div>
			</div>
		
		<span class="btn btn-primary" class="btn btn-primary" id="guardarnuevo">GUARDAR NUEVO</span>
		<a href="interfaz_admin.php"><button type="button" class="btn btn-primary">VOLVER ATRÁS</button></a>
		</div>
	</form>
	</body>
</html>

<script type="text/javascript">

    $(document).ready(function(){
        $('#guardarnuevo').click(function(){
          titulo=$('#titulo').val();
          autor=$('#autor').val();
          tipo=$('#tipo').val();
		  rango=$('#rango').val();
		  portada=$('#portada').val();
            agregardatos(titulo,autor,tipo,rango,portada);
		});

    });

function agregardatos(titulo,autor,tipo,rango,portada){
		var cadena="titulo=" + titulo + 
				"&autor=" + autor +
				"&tipo=" + tipo +
				"&rango=" + rango +
				"&portada=" + portada;

		$.ajax({
			type:"POST",
			url:"conexion/agregarDatos.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#frmsubir')[0].reset();
					alertify.success("agregado con exito :)");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});

		}
</script>

