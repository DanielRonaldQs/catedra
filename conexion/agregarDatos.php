<?php 	
	require_once "conexion.php";
	$conexion=conexion();
	$titulo=$_POST['titulo'];
	$autor=$_POST['autor'];
	$tipo=$_POST['tipo'];
	$rango=$_POST['rango'];
	$portada=$_POST['portada'];
	$fecha=date('Y-m-d');
	//$archivo=$_FILES['archivo']['name'];

	$sql="INSERT into publicacion 
			(publicacionTitulo,publicacionTipo,publicacionFecha,publicacionAutor,publicacionRango,publicacionPortada,publicacionEstado)
			values ('$titulo','$tipo','$fecha','$autor','$rango','$portada','ESPERANDO')";
	echo $result=mysqli_query($conexion,$sql);

 ?>