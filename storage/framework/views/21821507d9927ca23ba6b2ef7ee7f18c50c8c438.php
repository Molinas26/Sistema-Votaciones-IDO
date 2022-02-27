<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrar Estudiante</title>
    <link href="../css/login.css" rel="stylesheet">
    <script src="../js/login.js"></script>

</head>
    <body>
        <div class="mobile-screen">
            <div class="header">
              <h1>Registrar Estudiante</h1>
            </div>
            
            <div class="logo" style="background-image: url('../images/img.png');""></div>

            <form method="POST" action="<?php echo e(route('register')); ?>">
                <?php echo csrf_field(); ?>
                <input type="email" name="email" placeholder="Correo Electronico">
                <input type="password" name="pass" placeholder="Contraseña">
                <input type="password" name="repass" placeholder="Confirmar Contraseña">
                <a href="#" class="login-btn" id="signup-btn">Registrarse</a>
              </form>

              <div class="other-options">
                <div class="option" style="width: 100%" onclick="window.location='<?php echo e(route('login')); ?>'" id="prof"><p class="option-text">Iniciar Sesion</p></div>
              </div>

          </div>
    </body>
</html><?php /**PATH C:\laragon\www\Sistema-votacion-IDO\resources\views/auth/registerS.blade.php ENDPATH**/ ?>