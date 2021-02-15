<?php 	
	require_once "conexion.php";
	$conexion=conexion();
	$titulo=$_POST['titulo'];
	$autor=$_POST['autor'];
	$tipo=$_POST['tipo'];
	$rango=$_POST['rango'];
	$portada=$_POST['portada'];
	//$archivo=$_FILES['archivo']['name'];

	$sql="INSERT into publicacion 
			(publicacionTitulo,publicacionAutor,publicacionTipo,publicacionRango,publicacionPortada,publicacionEstado)
			values ('$titulo','$autor','$tipo','$rango','$portada','ESPERANDO')";
	echo $result=mysqli_query($conexion,$sql);

 ?>