<?php 
include_once("includes.php");
$imprimir=0;
?>
<!--wrap the page content do not style this-->
<div id="page-content">
	<div class="container">
		<div class="row">
	        <div class="col-lg-12">
				<form class="form-horizontal" method="POST">
				<div class="panel panel-primary">
		            <div class="panel-heading">
		              <h4 class="panel-titulo">MIS RESERVACIONES</h4>
		            </div>
		            <div class="panel-body">
		            <div class="alert alert-success" id="reservado" role="alert" style="display:none;" >SU RESERVACION SE ELIMINO CON ÉXITO!!</div>
		            <input type="hidden" id="alert-div" value="<?=$alert;?>">
		            <? $fechab = $fechab ? $fecha : "2017-06-03"; ?>
		            	<div class="form-group">
		            		<label for="txt_fecha" class="col-sm-1 label-control">Fecha:</label>
		            		<div class="col-sm-2">
		            			<input class="calendario form-control input-sm" name="fechab" id="fechab" required="required"  required="required" value="<?=$fechab;?>" />
		            		</div>
		            		<div class="col-sm-2">
		            			<input type="submit" class="btn btn-sm btn-primary" value="Buscar">
		            		</div>
		            	</div>
	
		            	<br />

		            	<?php
		            		$fechab = fecha_i($fechab);
		            		$query = "SELECT boleto_asiento,boleto_id,hb_id,hora_inicio,hora_fin,v_tipo,tipo_desc,v_capacidad,v_id,hb_fecha FROM horario_bus 
							inner join horario on hora_id = hb_horario_id
							inner join vehiculo on v_id = hb_bus_id
							inner join tipo_vehiculo on tipo_id = v_tipo
							inner join boleto on boleto_horario_bus_id = hb_id
							inner join persona on pers_id = boleto_persona_id
							where pers_id = '$persona_idpk' and hb_fecha >= $fechab"; 
		            		$datos=seleccionar($query,$imprimir);
		            	?>

						<div class="form-group">
							<div class="col-sm-9 col-sm-offset-2">
							<div class="table-responsive">
								<table class="table table-hover table-condensed table-striped table-responsive tablaBusqueda">
									<thead>
										<tr class="bg-primary">
											<th>No. Bus</th>
											<th>Fecha</th>
											<th>Hora Partida</th>
											<th>Hora Llegada</th>
											<th>Tipo</th>
											<th>Asiento</th>
											<th>Eliminar</th>			
										</tr>
									</thead>
									<tbody>
										<?php foreach ($datos as $valor) { 
											$hora_inicio=convertir_hora($valor['hora_inicio']);
											$hora_fin=convertir_hora($valor['hora_fin']);
											$id=enc($valor['boleto_id']);
										?>
										<tr>
											<td><?=$valor['v_id'];?></td>
											<td><?=$valor['hb_fecha'];?></td>
											<td><?=$hora_inicio;?></td>
											<td><?=$hora_fin;?></td>
											<td><?=$valor['tipo_desc'];?></td>
											<td><?=$valor['boleto_asiento'];?></td>
											<td><a class="btn btn-danger"  href='<?=$direccion."reservaciones.php?fecha=".enc($fechab)."&pk=".$id."&openModal=1"?>'><span class="glyphicon glyphicon-remove"></span> 
											</a></td>
										</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>	
		                    </div>
		                </div>

		            </div>
		         </div>
		    	</form>

		    	<div class="modal fade" id="modal-id">
		                	<div class="modal-dialog modal-lg">
		                		<div class="modal-content">
		                			<div class="modal-header bg-danger">
		                				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                				<h4 class="modal-title">ELIMINAR RESERVACIÓN</h4>
		                				<input type="hidden" id="open-modal" value="<?=$openModal ? $openModal : 0?>">
		                			</div>
		                			<form class="form-horizontal" method="POST" action="db_reservar.php">
		                			<div class="modal-body">
		                				<h4><b>¿Está seguro de eliminar la reservación?</b></h4>
												<div class="form-group">
													<div class="col-sm-5">
													<input type="hidden" name="boleto_bus" value="<?=$pk;?>">
													<input type="hidden" name="opcion" value="eliminar">
													</div>
										
			                					</div>
		                			</div>
		                			<div class="modal-footer">
		                				<a class="btn btn-danger btn-md" href="<?=$direccion;?>reservaciones.php">CANCELAR</a>
		                				<input type="submit" class="btn btn-primary btn-md" value="ELIMINAR">
		                			</div>
		              				</form>
		                		</div>
		                	</div>
		                </div>

<script type="text/javascript">
$(window).load(function() {
	 var openModal=parseInt($("#open-modal").val());
     if(openModal===1){
        $("#modal-id").modal("show");
    }
    var alert = parseInt($("#alert-div").val());
    if(alert===1){
    	$('#reservado').slideDown();
    }

});
</script>

			</div>
		</div>
		</div>
	</div>
</div>


