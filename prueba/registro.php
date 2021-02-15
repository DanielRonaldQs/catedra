<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<?php require_once "scripts.php"; ?>
</head>
<body style="background-color: #fff">
<br><br><br>
<div class="container">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<div class="panel panel-danger">
				<div class="panel panel-heading">REGISTRO USUARIO</div>
				<a class="navbar-brand" href=""><h1><img src="images/logo.png" alt="" style="width:50px;" >Cátedra Tesis</h1></a><br><br><br><br><br>
				<div class="panel panel-body">
					<form id="frmRegistro">
					<label>Nombre</label>
					<input type="text" class="form-control input-sm" id="nombre" name=""><br><br>
					<label>Contraseña</label>
					<input type="password" class="form-control input-sm" id="password" name="">
					<p></p>
					<span class="btn btn-primary" id="registrarNuevo">Registrar</span>
					</form>
					<div style="text-align: right;">
						<a href="admin.php" class="btn btn-default">Login</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-4"></div>
	</div>
</div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#registrarNuevo').click(function(){

			if($('#nombre').val()==""){
				alertify.alert("Debes agregar el nombre");
				return false;
			}else if($('#password').val()==""){
				alertify.alert("Debes agregar tu contraseña");
				return false;
			}

			cadena="nombre=" + $('#nombre').val() +
					"&password=" + $('#password').val();

					$.ajax({
						type:"POST",
						url:"conexion/registro.php",
						data:cadena,
						success:function(r){
							if(r==1){
								$('#frmRegistro')[0].reset();
								alertify.success("Agregado con exito");
							}else{
								alertify.error("Fallo al agregar");
							}
						}
					});



		});
	});
</script>