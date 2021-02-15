<?php 
	
   $host_db = "localhost"; // Host de la BD 
    //$usuario_db = "molidata_ustesis"; // Usuario de la BD 
    //$clave_db = "Tesis2019"; // Contraseña de la BD 
    //$nombre_db = "molidata_tesis"; // Nombre de la BD 
   $usuario_db='root';
$clave_db='';
$nombre_db='tesis';
    //conectamos y seleccionamos db 
    $conexion=mysqli_connect($host_db, $usuario_db, $clave_db); 
    if (!$conexion) {
		mysqli_error($conexion);
		exit();
	}
    mysqli_select_db($conexion, $nombre_db); 


 ?>