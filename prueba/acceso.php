<?php 
   $host_db = "localhost"; // Host de la BD 
    $usuario_db = "molidata_ustesis"; // Usuario de la BD 
    $clave_db = "Tesis2019"; // Contraseña de la BD 
    $nombre_db = "molidata_tesis"; // Nombre de la BD 
   //$usuario_db='root';
//$clave_db='';
//$nombre_db='tesis';
    //conectamos y seleccionamos db 
    $connection=mysqli_connect($host_db, $usuario_db, $clave_db); 
    if (!$connection) {
		mysqli_error($connection);
		exit();
	}
    mysqli_select_db($connection, $nombre_db); 
?>