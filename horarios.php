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
		              <h4 class="panel-titulo">MENÚ HORARIOS</h4>
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
		            		$query = "SELECT hora_id,hora_inicio,hora_fin FROM horario  "; 
		            		$datos=seleccionar($query,$imprimir);
		            	?>

						<div class="form-group">
							<div class="col-sm-9 col-sm-offset-2">
							<div class="table-responsive">
								<table class="table table-hover table-condensed table-striped table-responsive tablaBusqueda">
									<thead>
										<tr class="bg-primary">
											<th>No.</th>
											<th>Hora Partida</th>
											<th>Hora Llegada</th>			
										</tr>
									</thead>
									<tbody>
										<?php foreach ($datos as $valor) { 
											$hora_inicio=convertir_hora($valor['hora_inicio']);
											$hora_fin=convertir_hora($valor['hora_fin']);
											$id=enc($valor['hb_id']);
										?>
										<tr>
											<td><?=$valor['hora_id'];?></td>
											<td><?=$hora_inicio;?></td>
											<td><?=$hora_fin;?></td>
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


