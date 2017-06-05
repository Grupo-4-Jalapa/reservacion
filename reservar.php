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
		              <h4 class="panel-titulo">MENÚ RESERVACIÓN</h4>
		            </div>
		            <div class="panel-body">
		            <div class="alert alert-success" id="reservado" role="alert" style="display:none;" >SUS BOLETOS SE RESERVARON CON ÉXITO!!</div>
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
		            		$query = "SELECT hb_id,hora_inicio,hora_fin,v_tipo,tipo_desc,v_capacidad,v_id,hb_fecha FROM horario_bus 
							inner join horario on hora_id = hb_horario_id
							inner join vehiculo on v_id = hb_bus_id
							inner join tipo_vehiculo on tipo_id = v_tipo where hb_fecha >= '$fechab'  "; 
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
											<th>Asientos</th>
											<th>Detalles</th>			
										</tr>
									</thead>
									<tbody>
										<?php foreach ($datos as $valor) { 
											$hora_inicio=convertir_hora($valor['hora_inicio']);
											$hora_fin=convertir_hora($valor['hora_fin']);
											$id=enc($valor['hb_id']);
										?>
										<tr>
											<td><?=$valor['v_id'];?></td>
											<td><?=$valor['hb_fecha'];?></td>
											<td><?=$hora_inicio;?></td>
											<td><?=$hora_fin;?></td>
											<td><?=$valor['tipo_desc'];?></td>
											<td><?=$valor['v_capacidad'];?></td>
											<td><a class="btn btn-success"  href='<?=$direccion."reservar.php?fecha=".enc($fechab)."&pk=".$id."&openModal=1"?>'><span class="glyphicon glyphicon-play-circle"></span> 
											Ver</a></td>
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
		                			<div class="modal-header bg-success">
		                				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                				<h4 class="modal-title">Detalles de Bus/Horario</h4>
		                				<input type="hidden" id="open-modal" value="<?=$openModal ? $openModal : 0?>">
		                			</div>
		                			<form class="form-horizontal" method="POST" action="db_reservar.php">
		                			<div class="modal-body">
		                			<?php $fechab = dec($fecha);
		                			   $id = dec($pk);
		                			   $query = "SELECT hb_id,hora_inicio,hora_fin,v_tipo,tipo_desc,v_capacidad,v_id,hb_fecha,precio_desc,v_placa FROM horario_bus 
										inner join horario on hora_id = hb_horario_id
										inner join vehiculo on v_id = hb_bus_id
										inner join tipo_vehiculo on tipo_id = v_tipo
                                        inner join precio on precio_id = hb_precio_id where hb_id = $id  "; 
					            		$datos=seleccionar($query,$imprimir);

					            		foreach ($datos as $valor) {
					            			$col=$valor["v_capacidad"];
					            			$filas=ceil($col/4);
					            			$hora_inicio=convertir_hora($valor['hora_inicio']);
											$hora_fin=convertir_hora($valor['hora_fin']);
											$no_bus = $valor['v_id'];
											$tipo = $valor['tipo_desc'];
											$precio = $valor['precio_desc'];
											$placa = $valor['v_placa'];
					            		} ?>
					            		<div class="form-group">
						            		<div class="col-sm-4">
						            		<table class="tab table-responsive">
											<?php
												$col2=1;
												for ($i = 1; $i <= $filas; $i++){ 
													$cnt=1;
													?>
													<tr>
														<?php while($cnt<=4 && $col2<=$col){ 
															  $query2="SELECT boleto_asiento,boleto_persona_id FROM boleto WHERE boleto_horario_bus_id = '$id' and boleto_asiento ='$col2'";
															  $boleto = registro($query2,$imprimir);
																$margen = $cnt==2 ? "margin-right:50px;" : "";
																$estilo = !$boleto['boleto_asiento'] ? "bg-success" : "bg-danger";
															?>
														<td>
															<div class="<?=$estilo;?> div_asiento" style="<?=$margen;?> ">
															<?php if(!$boleto['boleto_asiento']){ ?>
															<input type="checkbox" name="asientos[]" class="asientos" value="<?=$col2;?>" />
															<?php } ?>
															<?=$col2++;?></div>
														</td>
														<?php 
														$cnt++;
															if($boleto['boleto_persona_id']==$persona_idpk){
															$boletosr.=" ".$boleto['boleto_asiento'];
															}
														} ?>
													</tr>
												<?php } ?>
											</table>
											</div>
											<div class="col-sm-5dd pull-right">
												<div class="form-group">
													<span class="col-sm-5"><h5>Bus No.: <?=$no_bus;?></h5></span>
													<span class="col-sm-5 col-sm-offset-1"><h5>Bus Tipo: <?=$tipo;?></h5></span>
												</div>
												<div class="form-group">
													<span class="col-sm-5"><h5>Precio: Q.<?=$precio;?>.00</h5></span>
													<span class="col-sm-5 col-sm-offset-1"><h5>Bus Tipo: <?=$placa;?></h5></span>
												</div>
												<div class="form-group">
													<span class="col-sm-5"><h5>Hora Partida: <?=$hora_inicio;?></h5></span>
													<span class="col-sm-5 col-sm-offset-1"><h5>Hora Llegada: <?=$hora_fin;?></h5></span>
												</div>
												<div class="form-group">
													<span class="col-sm-10 reservados">
													<h5><b>Boletos Reservados: <?=$boletosr;?></b></h5>
													</span>
												</div>

												<div class="form-group">
													<div class="col-sm-5">
													<input type="hidden" name="boleto_bus" value="<?=$id;?>">
													<input type="hidden" name="opcion" value="reservar">
													<a class="btn btn-danger btn-md" href="<?=$direccion;?>reservar.php">CANCELAR</a>
													</div>
													<div class="col-sm-5 col-sm-offset-1">
			                						<input type="submit" class="btn btn-primary btn-md" value="RESERVAR">
			                						</div>
			                					</div>
											</div>
										</div>
		                			</div>
		                			<div class="modal-footer">
		                				
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


