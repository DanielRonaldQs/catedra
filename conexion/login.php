<?php 


	session_start();
	require_once "conexion.php";


		$usuario=$_POST['nombre'];
		$pass=sha1($_POST['password']);

		$sql="SELECT * from usuario where nombre='$usuario' and password='$pass'";
		$result=mysqli_query($conexion,$sql);

		if(mysqli_num_rows($result) > 0){
			$_SESSION['user']=$usuario;
			echo 1;
		}else{
			echo 0;
		}
 ?>