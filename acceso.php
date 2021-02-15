<?php 
   $host_db = "localhost"; // Host de la BD 
    $usuario_db = "root"; // Usuario de la BD 
    $clave_db = ""; // Contraseña de la BD 
    $nombre_db = "catedra"; // Nombre de la BD 

    //conectamos y seleccionamos db 
    $connection=mysqli_connect($host_db, $usuario_db, $clave_db); 
    if (!$connection) {
		mysqli_error($connection);
		exit();
	}
    mysqli_select_db($connection, $nombre_db); 
?>