<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Reservación de boletos</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

</head>

  <body class="login-img3-body">

<div class="top">
			<h1>Reservacion de Boletos <span>BUS</span></span></h1>
		</div>

      <form class="login-form" action="db_login.php" method="POST">        
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" name="txt_user" class="form-control" placeholder="Usuario" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" name="txt_pass" class="form-control" placeholder="contraseña">
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Recordarme
                <span class="pull-right"> <a href="#">Has olvidado tu contraseña?</a></span>
            </label>
            <input type="hidden" name="opcion" value="login">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Iniciar Sesión</button>
            <a class="btn btn-info btn-lg btn-block" href="registro.php">regístrate</a>
        </div>
      </form>


  </body>
</html>
