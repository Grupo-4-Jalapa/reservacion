<?php 
include_once("includes.php");
$imprimir=0;
?>
<!--wrap the page content do not style this-->
<div id="page-content">
	<div class="container">
		<div class="row">
	        <div class="col-lg-12">
				<div class="panel panel-primary">
		            <div class="panel-heading">
		              <h4 class="panel-titulo">INFORMACIÓN DE USUARIO</h4>
		            </div>
		            <div class="panel-body">
		            <div class="alert alert-success" id="reservado" role="alert" style="display:none;" >SU INFORMACIÓN SE ACTUALIZO CON EXITO!!</div>
		            <input type="hidden" id="alert-div" value="<?=$alert;?>">
		            <br/>
		            <form class="form-validate form-horizontal " method="post" action="db_login.php">

          <div class="panel panel-primary">
            <div class="panel-heading">
              <h4 class="panel-titulo">Datos Personales</h4>
            </div>
            <div class="panel-body">

            	<?php $query="SELECT * FROM persona 
            				  INNER JOIN usuario on persona_id = pers_id
            				  WHERE pers_id = '$persona_idpk'";
            		$datos=registro($query,$imprimir);
            	?>
              <div class="form-group ">
                <label for="txt_nombre1" class="control-label col-sm-2">Primer nombre<span class="required">*</span></label>
                <div class="col-sm-3">
                    <input class=" form-control" id="txt_nombre1" name="txt_nombre1" type="text" required="required" value="<?=$datos['pers_nombre1'];?>" />
                </div>
                <label for="txt_nombre2" class="control-label col-sm-2">Segundo nombre<span class="required">*</span></label>
                <div class="col-sm-3">
                    <input class=" form-control" id="txt_nombre2" name="txt_nombre2" type="text" value="<?=$datos['pers_nombre2'];?>" />
                </div>
              </div>

              <div class="form-group ">
                <label for="txt_apellido1" class="control-label col-sm-2">Primer Apellido<span class="required">*</span></label>
                <div class="col-sm-3">
                    <input class=" form-control" id="txt_apellido1" name="txt_apellido1" type="text" required="required" value="<?=$datos['pers_apellido1'];?>" />
                </div>
                <label for="txt_apellido2" class="control-label col-sm-2">Segundo Apellido<span class="required">*</span></label>
                <div class="col-sm-3">
                    <input class=" form-control" id="txt_apellido2" name="txt_apellido2" type="text" value="<?=$datos['pers_apellido2'];?>" />
                </div>
              </div>

              <div class="form-group ">
                <label for="txt_telefono" class="control-label col-sm-2">Telefono<span class="required">*</span></label>
                <div class="col-sm-3">
                  <input class=" form-control" id="txt_telefono" name="txt_telefono" type="number" required="required" value="<?=$datos['pers_telefono'];?>"/>
                </div>
                <label for="txt_telefono" class="control-label col-sm-2">Correo Electrónico<span class="required">*</span></label>
                <div class="col-sm-3">
                  <input class=" form-control" id="txt_email" name="txt_email" type="email" required="required" value="<?=$datos['email'];?>"/>
                </div>
              </div>

              <div class="form-group ">
                <label for="txt_fecha" class="control-label col-sm-2">Fecha de nacimiento<span class="required">*</span></label>
                <div class="col-sm-3">
                  <input class=" form-control" id="txt_fecha" name="txt_fecha" type="date" required="required" value="<?=$datos['pers_fecha_nac'];?>"/>
                </div>
              </div>

            </div>
          </div>
          <br />
          <div class="form-group">
            <input type="hidden" name="opcion" value="actualizar">
            <div class="col-sm-offset-4 col-sm-2">
              <button class="btn btn-primary btn-sm" type="submit"><h4>ACTUALIZAR</h4></button>
            </div>
            <div class="col-sm-offset-1 col-sm-2">
                <a class="btn btn-danger btn-sm" href="http://localhost/proyecto"><h4>Cancelar</h4></a>
            </div>
          </div>

        </form>
		            	

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


