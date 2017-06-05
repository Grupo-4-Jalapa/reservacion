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
    <title>Login</title>
     <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
   
    <script src="js/jquery-1.12.3.min.js" charset="utf-8"></script>
    <script src="js/bootstrap.min.js" charset="utf-8"></script>
  </head>
  <body>
  	<div class="container_in">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <form method="post">
            <br><br>
            <div id="titulo2">
			 <h1><p class="text-center">LOGIN</p></h1>
			</div>
            
            <br><br>
            <div class="login_in">
            <div class="form-group">
              <label for="user">Usuario o email</label>
              <input type="text" name="user" id="user" class="form-control">
            </div>
            <div class="form-group">
              <label for="pass">Password</label>
              <input type="password" name="pass" id="pass" class="form-control">
            </div>
            <br><br>
            <div class="form-group">
            	<div class="col-sm-3 col-sm-offset-1">
              		<input type="button" name="login" id="login" value="INGRESAR" class="btn btn-success btn-lg">
              	</div>
              	<div class="col-sm-3 col-sm-offset-3">
              		<a class="btn btn-warning btn-lg" href="http://localhost/proyecto/registro.php"">REGISTRARSE</a>
              	</div>
            </div>
            <br/><br/>
            <span id="result"></span>
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
  </body>
</html>

<script>
  $(document).ready(function() {
    $('#login').click(function(){
      var user = $('#user').val();
      var pass = $('#pass').val();
      if($.trim(user).length > 0 && $.trim(pass).length > 0){
        $.ajax({
          url:"logueame.php",
          method:"POST",
          data:{user:user, pass:pass},
          cache:"false",
          beforeSend:function() {
            $('#login').val("Conectando...");
          },
          success:function(data) {
            $('#login').val("Login");
            if (data=="1") {
              $(location).attr('href','index.php');
            } else {
              $("#result").html("<div class='alert alert-dismissible alert-danger'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Error!</strong> las credenciales son incorrectas.</div>");
            }
          }
        });
      };
    });
  });
</script>
