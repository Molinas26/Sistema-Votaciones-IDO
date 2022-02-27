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

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">

    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css'>

  </head>
  <body style="background: #f7f7f7">

    <!-- top navigation -->
    <div class="top_nav" style="width: 100%">
      <div class="nav_menu">
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
</html><?php /**PATH C:\laragon\www\Sistema-Votaciones-IDO2\resources\views/plantilla/madre2.blade.php ENDPATH**/ ?>