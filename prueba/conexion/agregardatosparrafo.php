<?php 

include  "conexion.php";
/*$conexion=conexion();*/
$indice=$_POST['indice'];
$orden=$_POST['orden'];
$texto=$_POST['texto'];

$sql="INSERT into parrafo (publicacionId, parrafoOrden, parrafoTexto, parrafoEstado)                      
        values ('$indice','$orden','$texto','ACTIVO') " ;
echo $result=mysqli_query($conexion,$sql);
?>