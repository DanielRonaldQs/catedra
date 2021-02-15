<?php 
	$conexion=conexion();

	function conexion()
	{
		return $conexion=mysqli_connect("localhost","molidata_ustesis","Tesis2019","molidata_tesis");
	}

 ?>