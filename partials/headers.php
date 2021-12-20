<?php
include_once 'partials/session.php';
if(!(isset($_SESSION['usuarioR']))){
    header("Location: login.php");
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php if(isset($page_title)) echo $page_title; ?></title>

    <!-- Bootstrap -->
    <link href="plantilla/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="plantilla/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="plantilla/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="plantilla/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="plantilla/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="plantilla/build/css/custom.min.css" rel="stylesheet">
    <!--estilos personalizados-->
    <link href="css/estilos.css">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index2.html" class="site_title"><i class="fa fa-camera"></i> <span>El nido</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="img/alpaca.jpg"  class="img-rounded img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Bienvenido,</span>
                        <h2>
                            <?php
                            echo $_SESSION['usuarioR'];
                            ?>
                        </h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">

                            <li><a href="index2.php"><i class="fa fa-home"></i> Inicio</a></li>


                        </ul>
                    </div>
                    <!--Menu exclusivo del superusuario-->
                    <div class="menu_section">
                        <h3>Superusuario</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-user"></i> Control de usuarios <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="usuario_nuevo.php">Dar de alta</a></li>
                                    <li><a href="ver_administradores.php">Ver trabajadores</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-database"></i> Bases de datos <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="directorio_bd.php">Visualizar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/menu del superusuario-->

                    <!--Menu del administrador-->
                    <div class="menu_section">
                        <h3>Administrador</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-user"></i> Empleados <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="registro_usuario.php">Modificar Usuario</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-building"></i> Secciones <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="visualizar_empresas.php">Visualizar</a></li>
                                    <li><a href="alta_empresa.php">Alta de nuevo lugar</a></li>
                                    <li><a href="page_403.html">Eliminar</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-money"></i> Nómina <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="#">Configuración de Nómina</a></li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/menu del administrador-->


                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="img/alpaca.jpg" alt="">
                                <?php

                                    echo $_SESSION['nombreR'];
                                ?>
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="javascript:;"> perfil</a></li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="badge bg-red pull-right">50%</span>
                                        <span>Configuración</span>
                                    </a>
                                </li>
                                <li><a href="javascript:;">Help</a></li>
                                <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> cerrar sesión</a></li>
                            </ul>
                        </li>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle"  aria-expanded="false">
                                    <?php

                                        echo $_SESSION['selectR'];
                                    ?>

                                </a>
                                
                            </li>
                            <li class="">
                                <a >
                                    
                                    <span class="glyphicon glyphicon-briefcase"></span>
                                </a>
                            </li>                      
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle"  aria-expanded="false">
                                    <?php

                                        echo $_SESSION['selectidR'];
                                    ?>

                                </a>
                                
                            </li>
                            <li class="">
                                <a >
                                    
                                    <span class="glyphicon glyphicon-bookmark"></span>
                                </a>
                            </li>
                        </ul>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->