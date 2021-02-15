<?php

    $mysqli = new mysqli("localhost","root","","tesis");

    
    

    ModificarPublicacion($_POST['publicacionId'], 
                        STRTOUPPER($_POST['publicacionTitulo']), 
                        STRTOUPPER($_POST['publicacionAutor']),
                        STRTOUPPER($_POST['publicacionEstado']),
                        STRTOUPPER($_POST['publicacionTipo']), 
                        $_POST['publicacionRango'], 
                        STRTOUPPER($_POST['publicacionPortada']),
                        $_FILES['archivo']['name']);

    header('location:../editar_publicacion.php?publicacionId='.$_POST['publicacionId']);


	function ModificarPublicacion($publicacionId, $publicacionTitulo, $publicacionAutor, $publicacionEstado, $publicacionTipo, $publicacionRango, $publicacionPortada,$publicacionImagen)
	{
		include 'conexion.php';
		$sentencia="UPDATE publicacion SET publicacionTitulo='".$publicacionTitulo."',
        publicacionAutor='".$publicacionAutor."',
        publicacionEstado='".$publicacionEstado."',
        publicacionTipo='".$publicacionTipo."',
        publicacionRango='".$publicacionRango."',
        publicacionPortada='".$publicacionPortada."',
        publicacionImagen='".$publicacionImagen."' WHERE publicacionId='".$publicacionId."' ";
		$conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));

        $id_insert = $_GET['publicacionId'];
        
                    $permitidos = array("image/jpeg","image/jpg");
                    $limite_kb = 2000;
                        if(in_array($_FILES["archivo"]["type"], $permitidos) && $_FILES["archivo"]["size"] <= $limite_kb * 1024){

                        $fotopublicacion=$id_insert.'_PORTADA.jpg';
                        $ruta = '../images/publicacion/'.$fotopublicacion;
                        //echo $_FILES["archivo"]["type"];
                        
                        if(!file_exists($ruta)){
                            //mkdir($ruta);
                        }
                        
                        if(!file_exists($archivo)){
                            
                            $result = copy($_FILES["archivo"]["tmp_name"],$ruta);
                            
                            if($result){
                                echo "Archivo Guardado";

                                    } else {
                                    echo "Error al guardar archivo";
                                    }
                            
                                } else {
                                echo "Archivo ya existe";
                                }
                        }
                        else {
                                echo "Suba un archivo en .'jpg'   o    '.jpge'";
                                }
                /*}*/

	}
?>
