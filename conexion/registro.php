<?php 

	require_once "conexion.php";
	$conexion=conexion();

		$nombre=$_POST['nombre'];
		$password=sha1($_POST['password']);

		$sql="INSERT into usuario (nombre,password)
					values ('$nombre','$password')";
			echo $result=mysqli_query($conexion,$sql);
		

 ?>