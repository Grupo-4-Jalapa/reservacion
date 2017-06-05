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
		              <h4 class="panel-titulo">FORMULARIO DE CONTACTO</h4>
		            </div>
		            <div class="panel-body">
		            <div class="alert alert-success" id="reservado" role="alert" style="display:none;" >SU MENSAJE FUE ENVIADO CON ÉXITO!!</div>
		            <input type="hidden" id="alert-div" value="<?=$alert;?>">
		            <br/>
		            	<div class="form-group">
		            		<label for="txt_asunto" class="col-sm-2 label-control">ASUNTO:</label>
		            		<div class="col-sm-3">
		            			<input type="text" class="form-control" required="required" name="txt_asunto" >
		            		</div>
		            	</div>
		            	<div class="form-group">
		            		<label for="txt_concepto" class="col-sm-2 label-control">MENSAJE:
		            	</div>
		            	<div class="form-group">
		            		<div class="col-sm-6 col-sm-offset-1">
		            			<textarea class="form-control" required="required" rows="3"></textarea>
		            		</div>
		            	</div>
		            	<div class="form-group">
		            		<div class="col-sm-4 col-sm-offset-4">
		            			<input type="submit" class="btn btn-lg btn-primary" value="ENVÍAR">
		            		</div>
		            	</div>
	
		            	<br />

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


