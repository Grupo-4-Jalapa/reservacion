<?php include_once("includes.php");?>
<!--wrap the page content do not style this-->
<div id="page-content" class="container_in">
	<div class="container">
		<div class="row">
	        <div class="col-md-12">
				<form class="form-horizontal">
				<div class="panel panel-primary">
		            <div class="panel-heading">
		              <h4 class="panel-titulo">MENÚ PRINCIPAL</h4>
		            </div>
		            <div class="panel-body">
		            	<h1 align=center>Bienvenido usuario: <?=$_SESSION["user"];?></h1>
		            	<br />

						<div class="form-group">
							<div class="col-sm-9 col-sm-offset-3 menu_p">
								<a href="<?=$direccion;?>reservar.php" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-signal"></span> <br/>Reservar</a>
								<a href="<?=$direccion;?>horarios.php" class="btn btn-danger btn-lg" role="button">
								<span class="glyphicon glyphicon-list-alt"></span> <br/>Horarios<br/></a>
		                    </div>
		                </div>

		                <div class="form-group">
		                	<div class="col-sm-9 col-sm-offset-3 menu_p">
		                		<a href="<?=$direccion;?>reservaciones.php" class="btn btn-warning btn-lg" role="button"><span class="glyphicon glyphicon-bookmark"></span> <br/>Mis Reservaciones</a>
		                		<a href="<?=$direccion;?>perfil.php" class="btn btn-success btn-lg" role="button"><span class="glyphicon glyphicon-user"></span> <br/>Cuenta</a>
		                	</div>	
		                </div>

		                <div class="form-group">
			                <div class="col-sm-9 col-sm-offset-3 menu_p">
								<a href="<?=$direccion;?>contacto.php" class="btn btn-info btn-lg" role="button"><span class="glyphicon glyphicon-file"></span> <br/>Contacto</a>
								<a href="<?=$direccion;?>buzon.php" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-comment"></span> <br/>Buzón</a>
							</div>
		                </div>
		            </div>
		         </div>
		    	</form>

			</div>
		</div>
	</div>
</div>


