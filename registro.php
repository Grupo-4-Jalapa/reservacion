<?php
session_start();
if (isset($_SESSION["user"])) {
  header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>REGISTRO</title>
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <script src="js/jquery-1.12.3.min.js" charset="utf-8"></script>
    <script src="js/bootstrap.min.js" charset="utf-8"></script>
  </head>
  <body>
    <div class="container_in">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div id="titulo2">
           <h1><p class="text-center">REGISTRO DE USUARIO</p></h1>
          </div>
          <form class="form-validate form-horizontal " method="post" action="db_login.php">

          <div class="panel panel-primary">
            <div class="panel-heading">
              <h4 class="panel-titulo">Datos Personales</h4>
            </div>
            <div class="panel-body">

              <div class="form-group ">
                <label for="txt_nombre1" class="control-label col-sm-2">Primer nombre<span class="required">*</span></label>
                <div class="col-sm-3">
                    <input class=" form-control" id="txt_nombre1" name="txt_nombre1" type="text" required="required" />
                </div>
                <label for="txt_nombre2" class="control-label col-sm-2">Segundo nombre<span class="required">*</span></label>
                <div class="col-sm-3">
                    <input class=" form-control" id="txt_nombre2" name="txt_nombre2" type="text" />
                </div>
              </div>

              <div class="form-group ">
                <label for="txt_apellido1" class="control-label col-sm-2">Primer Apellido<span class="required">*</span></label>
                <div class="col-sm-3">
                    <input class=" form-control" id="txt_apellido1" name="txt_apellido1" type="text"required="required" />
                </div>
                <label for="txt_apellido2" class="control-label col-sm-2">Segundo Apellido<span class="required">*</span></label>
                <div class="col-sm-3">
                    <input class=" form-control" id="txt_apellido2" name="txt_apellido2" type="text" />
                </div>
              </div>

              <div class="form-group ">
                <label for="txt_telefono" class="control-label col-sm-2">Telefono<span class="required">*</span></label>
                <div class="col-sm-3">
                  <input class=" form-control" id="txt_telefono" name="txt_telefono" type="number" required="required"/>
                </div>
                <label for="txt_telefono" class="control-label col-sm-2">Correo Electrónico<span class="required">*</span></label>
                <div class="col-sm-3">
                  <input class=" form-control" id="txt_email" name="txt_email" type="email" required="required"/>
                </div>
              </div>

              <div class="form-group ">
                <label for="txt_fecha" class="control-label col-sm-2">Fecha de nacimiento<span class="required">*</span></label>
                <div class="col-sm-3">
                  <input class=" form-control" id="txt_fecha" name="txt_fecha" type="date" required="required"/>
                </div>
              </div>

            </div>
          </div>

          <div class="panel panel-info">
            <div class="panel-heading">
              <h4 class="panel-titulo">Datos Usuario</h4>
            </div>
            <div class="panel-body">

              <div class="form-group ">
                <label for="txt_usuario" class="control-label col-sm-2">Nombre de usuario<span class="required">*</span></label>
                <div class="col-sm-3">
                    <input class=" form-control" id="txt_usuario" name="txt_usuario" type="text" required="required" />
                </div>
              </div>
              <div class="form-group">
                <label for="txt_pass" class="control-label col-sm-2">Contraseña<span class="required">*</span></label>
                <div class="col-sm-3">
                    <input class=" form-control" id="txt_pass" name="txt_pass" type="password" required="required" />
                </div>
                <label for="txt_pass2" class="control-label col-sm-2">Confirma Contraseña<span class="required">*</span></label>
                <div class="col-sm-3">
                    <input class=" form-control" id="txt_pass2" name="txt_pass2" type="password" required="required" />
                </div>
              </div>

            </div>
          </div>

          </div>
          </div>
          <br />
          <div class="form-group">
            <input type="hidden" name="opcion" value="registro">
            <div class="col-sm-offset-4 col-sm-2">
              <button class="btn btn-primary btn-sm" type="submit"><h4>Registrarse</h4></button>
            </div>
            <div class="col-sm-offset-1 col-sm-2">
                <a class="btn btn-danger btn-sm" href="http://localhost/proyecto"><h4>Cancelar</h4></a>
            </div>
          </div>

        </form>
        <script type="text/javascript">
            $(document).ready(function() {
            //variables
            var pass1 = $('#txt_pass1');
            var pass2 = $('#txt_pass2');
            var confirmacion = "Las contraseñas si coinciden";
            var longitud = "La contraseña debe estar formada entre 6-10 carácteres (ambos inclusive)";
            var negacion = "No coinciden las contraseñas";
            var vacio = "La contraseña no puede estar vacía";
            //oculto por defecto el elemento span
            var span = $('<span></span>').insertAfter(pass2);
            span.hide();
            //función que comprueba las dos contraseñas
            function coincidePassword(){
            var valor1 = pass1.val();
            var valor2 = pass2.val();
            //muestro el span
            span.show().removeClass();
            //condiciones dentro de la función
            if(valor1 != valor2){
            span.text(negacion).addClass('negacion'); 
            }
            if(valor1.length==0 || valor1==""){
            span.text(vacio).addClass('negacion');  
            }
            if(valor1.length<6 || valor1.length>10){
            span.text(longitud).addClass('negacion');
            }
            if(valor1.length!=0 && valor1==valor2){
            span.text(confirmacion).removeClass("negacion").addClass('confirmacion');
            }
            }
            //ejecuto la función al soltar la tecla
            pass2.keyup(function(){
            coincidePassword();
            });
          });

        </script>

        </div>
      </div>
    </div>
    </div>
  </body>
</html>

