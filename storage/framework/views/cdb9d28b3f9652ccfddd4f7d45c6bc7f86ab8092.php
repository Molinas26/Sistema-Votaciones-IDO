<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo e(asset('images/img.png')); ?>" type="image/x-icon">
    <title>IDO|<?php echo $__env->yieldContent('titulo'); ?></title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="<?php echo e(asset('css/all.css')); ?>" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?php echo e(asset('css/modal.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo e(asset('css/font-awesome.min.css')); ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo e(asset('css/nprogress.css')); ?>" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo e(asset('css/daterangepicker.css')); ?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo e(asset('css/custom.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/dataTables.bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/fixedHeader.bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/responsive.bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/scroller.bootstrap.min.css')); ?>" rel="stylesheet">

<link rel="stylesheet" href="sweetalert2.min.css">

    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css'>

  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="/" class="site_title">
                <img width="50px" height="50px" src="<?php echo e(asset('images/img.png')); ?>" alt="">  <span>IDO</span>
              </a>
            </div>

            <!-- sidebar menu -->
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('estudiante.index')): ?>
                  <li><a><i class="fa fa-home"></i> Estudiantes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo e(route('estudiante.index')); ?>">Listado de Estudiantes</a></li>
                    </ul>
                  </li>
                  <?php endif; ?>
                  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('profesor.index')): ?>
                  <li><a><i class="fa fa-home"></i> Profesores <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo e(route('profesor.index')); ?>">Listado de Profesores</a></li>
                      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('profesor.create')): ?>
                        <li><a href="<?php echo e(route('profesor.nuevo')); ?>">Nuevo Profesor</a></li>
                      <?php endif; ?>
                    </ul>
                  </li>
                  <?php endif; ?>
                  <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('planilla')): ?>
                      <li><a href="<?php echo e(route('planilla')); ?>">Planilla IDO</a></li>
                      <?php endif; ?>
                      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('candidatos')): ?>
                      <li><a href="<?php echo e(route('candidatos')); ?>">Candidatos Eleccion</a></li>
                      <?php endif; ?>
                    </ul>
                  </li>
                                  </ul>
              </div>

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
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li style="font-size: 20px" class="nav-item dropdown open" style="float: right;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" 
                    data-toggle="dropdown" aria-expanded="false" style="text-align: left">
                    <img src="<?php echo e(asset('images/img.png')); ?>" alt=""><?php echo e(auth()->user()->name); ?>

                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="javascript:;"> Profile</a>
                        <a class="dropdown-item"  href="javascript:;">
                          <span class="badge bg-red pull-right">50%</span>
                          <span>Settings</span>
                        </a>
                    <a class="dropdown-item"  href="javascript:;">Help</a>
                    <form action="<?php echo e(route('logout')); ?>" method="post">
                      <?php echo csrf_field(); ?>
                      <button class="dropdown-item"  type="submit"><i class="fa fa-sign-out pull-right"></i>Cerras Sesion</button>
                    </form>
                    </div>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

        <style>
          .btn-nuevo{
            background: #4792e2;
          }
          .btn-editar{
            background: #92e3ee;
          }
          .btn-detalles{
            background: #7be2c3;
            content: " Detalles"
          }
          .btn-desactivar{
            background: #f75666;
          }
          .btn-regresar{
            background: #f8b6ed;
          }
          .btn-guardar{
            background: #bae9f0;
          }
          .btn-activar{
            background: #448edd;
          }
          .btn-limpiar{
            background: #aff8bf;
          }
        </style>

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="row" style="overflow:scroll;height: 88vh">
              <div class="col-md-12 col-sm-12 ">
                <h1><center><?php echo $__env->yieldContent('titulo'); ?></center></h1>
                <?php echo $__env->yieldContent('contenido'); ?>
              </div>
            </div>

            

          </div>
        </div>
        <!-- /page content -->

      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
    <!-- Bootstrap -->
   <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
    <!-- FastClick -->
    <script src="<?php echo e(asset('js/fastclick.js')); ?>"></script>
    <!-- NProgress -->
    <script src="<?php echo e(asset('js/nprogress.js')); ?>"></script>
    <!-- Chart.js -->
    <script src="<?php echo e(asset('js/Chart.min.js')); ?>"></script>
    <!-- jQuery Sparklines -->
    <script src="<?php echo e(asset('js/jquery.sparkline.min.jss')); ?>"></script>
    <!-- Flot -->
    <script src="<?php echo e(asset('js/jquery.flot.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.flot.pie.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.flot.time.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.flot.stack.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.flot.resize.js')); ?>"></script>
    <!-- Flot plugins -->
    <script src="<?php echo e(asset('js/jquery.flot.orderBars.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.flot.spline.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/curvedLines.js')); ?>"></script>
    <!-- DateJS -->
    <script src="<?php echo e(asset('js/date.js')); ?>"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo e(asset('js/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/daterangepicker.js')); ?>"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="<?php echo e(asset('js/custom.min.js')); ?>"></script>

    <script src="<?php echo e(asset('js/all.js')); ?>"></script>
    <!-- Datatables -->
    <script src="<?php echo e(asset('js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/dataTables.bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/dataTables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/buttons.bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/buttons.flash.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/buttons.html5.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/buttons.print.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/dataTables.fixedHeader.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/dataTables.keyTable.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/responsive.bootstrap.js')); ?>"></script>
    <script src="<?php echo e(asset('js/dataTables.scroller.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jszip.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/pdfmake.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/vfs_fonts.js')); ?>"></script>
    <script src="<?php echo e(asset('js/modal.js')); ?>"></script>
  </body>
</html><?php /**PATH C:\laragon\www\Sistema-Votaciones-IDO\resources\views/plantilla/madre.blade.php ENDPATH**/ ?>