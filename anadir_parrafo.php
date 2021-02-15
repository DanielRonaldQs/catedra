<?php 

include('conexion/conexion.php');
date_default_timezone_set('America/Lima');
mysqli_set_charset($conexion, 'utf8' );


$put=$_GET['publicacionId'];



$informacionpub=muestraparrafo($_GET['publicacionId']);

function muestraparrafo( $publicacionId )

  {

	global $conexion;

   $sentencia="SELECT * FROM parrafo WHERE publicacionId='".$publicacionId."' ";

   $resultado= $conexion->query($sentencia) or die ("Error al consultar producto".mysqli_error($conexion)); 

   $dato=$resultado->fetch_assoc();



   return [

	$dato['parrafoId'],

	$dato['publicacionId'],

	$dato['parrafoOrden'],

	$dato['parrafoTexto'],

	$dato['parrafoEstado']

   ];

  }



?>



<!DOCTYPE html>

<html lang="es">

	<head>

		<title>TESIS HUANCAYO</title>

		<?php require_once "scripts.php"; ?>

		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />

	</head>

<body>

	<h1 style="text-align: center; font-size: 1.5em;">AÑADIR P&Aacute;RRAFO</h1>

	<div class="container">

	<table class="table table-bordered">

	  <thead>

	    <tr>

	      <th scope="col">N°</th>

	      <th scope="col">Titulo</th>

	      <th scope="col">Autor</th>

	      <th scope="col">Tipo</th>

	      <th scope="col">Portada</th>

	      <th scope="col">Estado</th>

	      <th scope="col">Rango</th>

	    </tr>

	  </thead>

	  <tbody>

	    <?php 

                $sql="SELECT * from publicacion WHERE publicacionId=$put";

                $result=mysqli_query($conexion,$sql);

                while($fila=mysqli_fetch_array($result))

                {

                  echo "<tr>";

                    echo "<td>"; echo $fila['publicacionId']; echo "</td>";

                    echo "<td>"; echo $fila['publicacionTitulo']; echo "</td>";

                    echo "<td>"; echo $fila['publicacionAutor']; echo "</td>";

                    echo "<td>"; echo $fila['publicacionTipo']; echo "</td>";

                    echo "<td>"; echo $fila['publicacionPortada']; echo "</td>";

                    echo "<td>"; echo $fila['publicacionEstado']; echo "</td>";

                    echo "<td>"; echo $fila['publicacionRango']; echo "</td>";

               }

            ?>

	  </tbody>

	</table>

	</div>

	<form id="actualizar">

	    <div class="container">

	    	<h1><img src="images/logo.png" class="img-fluid" class="rounded mx-auto d-block" alt="Responsive image" style="width:50px;" >Cátedra Tesis</h1><br>

	    	<div class="form-group">

	    		<input type="hidden" name="" id="indice" value="<?php echo $put?>">

				<label>Orden de Párrafo</label><br>

				<input type="text" name="" id="orden">

			</div>

			<div class="form-group">

				<label>Parrafo</label><br>

				<textarea type="text" name="" id="texto" placeholder="Ingrese el texto para su parrafo" cols="80"></textarea> 

			</div>

			<span class="btn btn-primary" class="btn btn-primary" id="guardarparrafo">AGREGAR PARRAFO</span>

			<a href="editar_publicacion.php?publicacionId=<?php echo $put?>">

					<button type="button" class="btn btn-primary">VOLVER ATRÁS</button>

			</a>

		</div>

	</form>

</body>



</html>









<script type="text/javascript">

$(document).ready(function(){

$('#guardarparrafo').click(function(){

		indice=$('#indice').val();

    orden=$('#orden').val();

    texto=$('#texto').val();

    agregardatosparrafo(indice,orden,texto);

        });

    });



function agregardatosparrafo(indice,orden,texto){



			var cadena="indice=" + indice +

			"&orden=" + orden + 

					"&texto=" + texto;



			$.ajax({

				type:"POST",

				url:"conexion/agregardatosparrafo.php",

				data:cadena,

						/*

						fail:function(){

							alert("error");

						},

						beforeSend(){

							alert("cargando")

						},

						success:function(){

							alert("guardado")

						}*/

				success:function(r){

				if(r==1){

					$('#actualizar')[0].reset();

					alertify.success("agregado con exito :)");

				}else{

					alertify.error("Fallo el servidor :(");

				}

			}

						





			});

}

</script>