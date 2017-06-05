<?php

session_start();
if(!isset($_SESSION["user"])){
  header("location:login.php");
}
require_once("funciones_generales.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Reservación</title>
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href='css/jquery-ui.min.css' rel='stylesheet'>
    <link href='css/datatables.css' rel='stylesheet'>
    
    
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src='js/datatables.min.js'></script>
    <script src="js/bootstrap.min.js"></script>
    <script src='js/jquery-ui.min.js'></script>
    <script src='js/datepicker-es.js'></script>
    <script src="js/menu.js"></script>
    <script src='js/funciones.js'></script>

</head>
<body>
  </head>
  <body>
<div class="container_in">

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="slide-nav">
  <div class="container">
   <div class="navbar-header">
    <a class="navbar-toggle"> 
      <span class="sr-only">Menú Principal</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
     </a>
    <a class="navbar-brand" href="<?=$direccion;?>index.php">Reservación</a>
   </div>
   <div id="slidemenu">

          <form class="navbar-form navbar-right" role="form">
            <a class="btn btn-danger" href="logout.php">Cerrar Sesión</a>
          </form>

    <ul class="nav navbar-nav">
     <li class="active"><a href="<?=$direccion;?>index.php">Inicio</a></li>
     <li><a href="<?=$direccion;?>reservar.php">Reservar</a></li>
     <li><a href="<?=$direccion;?>reservaciones.php">Mis Reservaciones</a></li>
     <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Opciones <b class="caret"></b></a>
      <ul class="dropdown-menu">
       <li class="dropdown-header">Información</li>
       <li><a href="<?=$direccion;?>perfil.php">Modificar información</a></li>
       <li><a href="<?=$direccion;?>buzon.php">Buzón</a></li>
       <li><a href="<?=$direccion;?>contraseña.php">Cambiar Contraseña</a></li>
       <li class="divider"></li>
       <li class="dropdown-header">Ayuda/Soporte</li>
       <li><a href="<?=$direccion;?>ayuda.php">¿Cómo Reservar?</a></li>
       <li><a href="<?=$direccion;?>contacto.php">Contacto</a></li>
       <li><a href="<?=$direccion;?>logout.php">Cerrar Sesión</a></li>
      </ul>
     </li>
    </ul>

   </div>
  </div>
 </div>

