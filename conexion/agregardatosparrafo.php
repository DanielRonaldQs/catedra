<?php 

include  "conexion.php";
date_default_timezone_set('America/Lima');
mysqli_set_charset($conexion, 'utf8' );
/*$conexion=conexion();*/
$indice=$_POST['indice'];
$orden=$_POST['orden'];
$texto=$_POST['texto'];

$sql="INSERT into parrafo (publicacionId, parrafoOrden, parrafoTexto, parrafoEstado)                      
        values ('$indice','$orden','$texto','ACTIVO') " ;
echo $result=mysqli_query($conexion,$sql);
?>