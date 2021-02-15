<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<?php require_once "scripts.php"; ?>
</head>
<body style="background-color: gray">
<br><br><br>
<div class="container">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<div class="panel panel-primary">
				<div class="panel panel-heading">LOGIN CÁTEDRA TESIS</div>
				<div class="panel panel-body">
					<div style="text-align: center;">
						<a class="navbar-brand" href=""><h1><img src="images/logo.png" alt="" style="width:50px;" >Cátedra Tesis</h1></a>
					</div>
					<p></p><br><br><br><br><br>
					<label>Usuario</label>
					<input type="text" id="nombre" class="form-control input-sm" name=""><br>
					<label>Contraseña</label>
					<input type="password" id="password" class="form-control input-sm" name="">
					<p></p><br>
					<div style="text-align: center;"><span class="btn btn-primary" id="entrarSistema">Entrar</span>
					<a href="registro.php" class="btn btn-danger">Registro</a></div>
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
		$('#entrarSistema').click(function(){
			if($('#nombre').val()==""){
				alertify.alert("Debes agregar el usuario");
				return false;
			}else if($('#password').val()==""){
				alertify.alert("Debes agregar el password");
				return false;
			}

			cadena="nombre=" + $('#nombre').val() + 
					"&password=" + $('#password').val();

					$.ajax({
						type:"POST",
						url:"conexion/login.php",
						data:cadena,
						success:function(r){
							if(r==1){
								window.location="interfaz_admin.php";
							}else{
								alertify.alert("Fallo al entrar :(");
							}
						}
					});

		});	
	});
</script>