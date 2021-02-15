
<?php 
	session_start();
	require_once "conexion/conexion.php";
	$conexion=conexion();

 ?>

<!-- Modal para registros nuevos -->
<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="myModalLabel">Añadir parrafo</h4>
								</div>
								<div class="modal-body">
										<label>Orden de Parrafo</label>
										<input type="text" name="" id="parrafoOrden" class="form-control input-sm">
										<label>Parrafo</label>
										<input type="text" name="" id="parrafoTexto" class="form-control input-sm">
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">
									Agregar
									</button>
								</div>
							</div>
						</div>
					</div>