<?php 
  
	session_start();
  
	if(isset($_SESSION['user'])){

include('conexion/conexion.php');
date_default_timezone_set('America/Lima');
mysqli_set_charset($conexion, 'utf8' );
?>



<html lang="es">

<head>

  <title>PAGE: PUBLICACIONES BAGIR</title>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/bootstrap.min.css">

  <script src="js/jquery.min.js"></script>

  <script src="js/alertifyjs/bootstrap.min.js"></script>

  <?php require_once "scripts.php"; ?>

</head>

<body>

    <div class="container">

      <h2>INTERFAZ PRINCIPAL - ADMINISTRADOR</h2>

      <p>Publicaciones: TRABAJOS TESIS DERECHO</p><br>

      <div class="container">

      <caption><a href="subir_noticia.php">

            <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">Agregar publicación  <span class="glyphicon glyphicon-plus"></span></button></a>

      </caption></div><br>  

      <table class="table table-hover">

        <thead>

          <tr>

            <th>No.</th>

            <th>FECHA</th>

            <th>TITULO</th>

            <th>AUTOR</th>

            <th>TIPO</th>

            <th>Editar</th>

          </tr>

        </thead>

        <tbody>

            <?php 

                $sql="SELECT * from publicacion";

                $result=mysqli_query($conexion,$sql);

                while($fila=mysqli_fetch_array($result))

                {

                  echo "<tr>";

                    echo "<td>"; echo $fila['publicacionId']; echo "</td>";

                    echo "<td>"; echo $fila['publicacionFecha']; echo "</td>";

                    echo "<td>"; echo $fila['publicacionTitulo']; echo "</td>";

                    echo "<td>"; echo $fila['publicacionAutor']; echo "</td>";

                    echo "<td>"; echo $fila['publicacionTipo']; echo "</td>";

                    echo "<td><a href='editar_publicacion.php?publicacionId=".$fila['publicacionId']."'> <button type='button' class='btn btn-success'>EDITAR</button> </a></td>";

               }

            ?>

        </tbody>

      </table>

    </div>

        

    <div class="container">

		<div class="row">

			<div class="col-sm-12">

        <a href="conexion/salir.php"><button type="button" class="btn btn-default btn-block">SALIR</button></a>

			</div>

		</div>

		</div>

</body>

</html>







<?php

  } else {

	header("location:admin.php");

	}

?>







<script type="text/javascript">

  $(document).ready(function(){

    $('#actualizadatos').click(function(){

          actualizaDatos();

        });

  });

  </script>





 

  

