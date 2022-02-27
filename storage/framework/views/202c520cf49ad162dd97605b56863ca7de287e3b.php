<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrar Estudiante</title>
    <link href="css/login.css" rel="stylesheet">
    <script src="js/login.js"></script>

</head>
    <body>
        <div class="mobile-screen2">
            <div class="header">
              <h1>Registrar Estudiante</h1>
            </div>
            
            <div class="logo" style="background-image: url('images/img.png');""></div>

            <form method="POST" action="<?php echo e(route('register')); ?>">
                <?php echo csrf_field(); ?>
                <div style="width: 45%;float: left;margin-left: 5%">
                  <input  type="text" name="name" required max="40" placeholder="Nombre Completo"  value="<?php echo e(old('name')); ?>"
                  class="<?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                  <?php $__errorArgs = ['name'];
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
                </div>
                <div style="width: 45%;float: left;margin-left: 5%">
                  <input  type="text" name="user" required max="20" placeholder="Nombre de Usuario" value="<?php echo e(old('user')); ?>"
                  class="<?php $__errorArgs = ['user'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                  <?php $__errorArgs = ['user'];
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
                </div>
                <div style="width: 45%;float: left;margin-left: 5%">
                  <input  type="text" name="identidad" required pattern="[0-9]{13}" 
                  title="Ingrese una identidad valida" value="<?php echo e(old('identidad')); ?>" maxlength="13"
                  placeholder="Identidad sin guiones" class="<?php $__errorArgs = ['identidad'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
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
                </div>
                <div style="width: 45%;float: left;margin-left: 5%">
                  <input type="password" name="password" placeholder="Contraseña" class="<?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
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
                </div>
                <div style="width: 45%;float: left;margin-left: 5%">
                  <input  type="password" name="password_confirmation" placeholder="Confirmar Contraseña">
                </div>

                <button  type="submit" class="login-btn" id="signup-btn">Registrarse</button>
              </form>

              <div class="other-options">
                <div class="option" style="width: 100%" onclick="window.location='<?php echo e(route('login')); ?>'" id="prof"><p class="option-text">Iniciar Sesion</p></div>
              </div>

          </div>
    </body>
</html><?php /**PATH C:\laragon\www\Sistema-Votaciones-IDO\resources\views/auth/register.blade.php ENDPATH**/ ?>