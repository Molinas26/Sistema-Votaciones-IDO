<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesion</title>
    <link href="../css/login.css" rel="stylesheet">
    <script src="../js/login.js"></script>

</head>
    <body>
        <div class="mobile-screen">
            <div class="header">
              <h1>Bienvenido</h1>
            </div>
            
            <div class="logo" style="background-image: url('../images/img.png');""></div>
            
            <form method="POST" action="<?php echo e(route('login')); ?>">
              <?php echo csrf_field(); ?>
                  <input  type="text" name="identidad" required max="13" pattern="[0-9]{13}" title="Ingrese una identidad valida" 
                  placeholder="Identidad sin guiones">
                  <?php $__errorArgs = ['identidad'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="invalid-feedback" role="alert">
                        <i style="color: red"><?php echo e($message); ?></i>
                      </span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                  <input type="password" name="password" placeholder="Contraseña" >
                  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="invalid-feedback" role="alert">
                        <i style="color: red"><?php echo e($message); ?></i>
                      </span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              <button type="submit" class="login-btn">Iniciar Sesion</button>
            </form>
            
            
            
            <div class="other-options">
              <div style="width: 100%" class="option" onclick="window.location='<?php echo e(route('register')); ?>'" id="fPass"><p class="option-text">Registrar Estudiante</p></div>
            </div>
            
          </div>
    </body>
</html><?php /**PATH C:\laragon\www\Sistema-votacion-IDO\resources\views/auth/login.blade.php ENDPATH**/ ?>