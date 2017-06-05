<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Basic Table | Creative - Bootstrap 3 Responsive Admin Template</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
      <!--header start-->
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.html" class="logo">Reservacion D<span class="lite">E Boletos</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Search" type="text">
                        </form>
                    </li>                    
                </ul>
                <!--  search form end -->                
            </div>

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                    
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/">
                            </span>
                            <span class="username">usuario</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i> Mi Perfil</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_mail_alt"></i> Mi Inbox</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_clock_alt"></i> Cronograma</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_chat_alt"></i> Chats</a>
                            </li>
                            <li>
                                <a href="login.html"><i class="icon_key_alt"></i> Cerrar Sesión</a>
                            </li>
                            <li>
                                <a href="documentation.html"><i class="icon_key_alt"></i> Documentación</a>
                            </li>
                            <li>
                                <a href="documentation.html"><i class="icon_key_alt"></i> Documentación</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="index.html">
                          <i class="icon_house_alt"></i>
                          <span>Casa</span>
                      </a>
                  </li>
          
          <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Horarios</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                     <ul class="sub">
                          <li><a class="" href="form_component.html">Lunes a Viernes</a></li>                          
                          <li><a class="" href="form_validation.html">Sabado y Domingo</a></li>
                      </ul>
                  </li>       
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <!--<i class="icon_desktop"></i>-->
                          <span>Bus</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="general.html">Extraurbano</a></li>
                          <li><a class="" href="buttons.html">Pulma</a></li>
                          <li><a class="" href="grids.html">Unidos Jalapanecos</a></li>
                      </ul>
                  </li>
              <!-- sidebar menu end-->
          </div>
      </aside>
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		 <!-- page start--> 
              <div class="row">
              <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                      <h4 class="panel-titulo">
                       Formulario de registro
                      </h4>
                    </header>
                     <div class="panel-group">
                      <div class="form">
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
                                  <input class=" form-control" id="txt_telefono" name="txt_telefono" type="email" required="required"/>
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
                                <div class="col-sm-5">
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

                          <div class="panel panel-danger">
                            <div class="panel-heading">
                              <h4 class="panel-titulo">Datos Necesarios Para Transacciones</h4>
                            </div>
                            <div class="panel-body">

                              <div class="form-group ">
                                <label for="txt_cui" class="control-label col-sm-2">DPI<span class="required"></span></label>
                                <div class="col-sm-3">
                                  <input class=" form-control" id="txt_cui" name="txt_cui" type="number" placeholder="Ingrese CUI sin espacios ni signos" />
                                </div>
                                <label for="txt_nit" class="control-label col-sm-2">NIT<span class="required"></span></label>
                                <div class="col-sm-3">
                                  <input class=" form-control" id="txt_nit" name="txt_nit" type="number" placeholder="Ingrese Nit sin espacios ni signos" />
                                </div>
                              </div>

                              <div class="form-group ">
                                <label for="txt_tarjeta" class="control-label col-sm-2">No. Tarjeta<span class="required"></span></label>
                                <div class="col-sm-3">
                                  <input class=" form-control" id="txt_tarjeta" name="txt_tarjeta" type="number" placeholder="Ingrese el numero de tarjeta" />
                                </div>
                                <label for="txt_banco" class="control-label col-sm-2">Banco Tarjeta<span class="required"></span></label>
                                <div class="col-sm-3">
                                  <input class=" form-control" id="txt_banco" name="txt_banco" type="text" />
                                </div>
                              </div>

                          </div>
                          </div>
                          <br />
                          <div class="form-group">
                            <input type="hidden" name="opcion" value="registro">
                            <div class="col-sm-offset-4 col-sm-2">
                              <button class="btn btn-primary btn-xs" type="submit"><h4>Registrarse</h4></button>
                            </div>
                            <div class="col-sm-offset-1 col-sm-2">
                                <button class="btn btn-danger btn-xs" type="button"><h4>Cancelar</h4></button>
                            </div>
                          </div>

                          </form>
                        </div>
                    </div>
                </section>
              </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      <div class="text-right">
        <div class="credits">
            <!-- 
                All the links in the footer should remain intact. 
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
            -->
            <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
  </section>
  <!-- container section end -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- jquery validate js -->
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>

    <!-- custom form validation script for this page-->
    <script src="js/form-validation-script.js"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>    


  </body>
</html>
