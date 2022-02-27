
<?php $__env->startSection('titulo'); ?>
Crear Profesor
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>

<form method="post">
    <?php echo csrf_field(); ?>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" >Nombre Completo: </label>
        <div  class="col-md-6 col-sm-6 " >
            <input  type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" required max="40" 
            placeholder="Nombre Completo" value="<?php echo e(old('name')); ?>">
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
    </div>
    <br>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" >Nombre de Usuario: </label>
        <div  class="col-md-6 col-sm-6 " >
            <input  type="text" class="form-control <?php $__errorArgs = ['user'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="user" required max="20" 
            placeholder="Nombre de Usuario" value="<?php echo e(old('user')); ?>">
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
    </div>
    <br>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" >Identidad: </label>
        <div  class="col-md-6 col-sm-6 " >
            <input  type="text" class="form-control <?php $__errorArgs = ['identidad'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
            name="identidad" required maxlength="13" pattern="[0-9]{13}" title="Ingrese una identidad valida" 
            placeholder="Identidad sin guiones" value="<?php echo e(old('identidad')); ?>">
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
    </div>
    <br>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" >Contraseña: </label>
        <div  class="col-md-6 col-sm-6 " >
            <input type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
            name="password" placeholder="Contraseña">
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
    </div>
    <br>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" >Confirmar Contraseña: </label>
        <div  class="col-md-6 col-sm-6 ">
            <input class="form-control"  type="password" name="password_confirmation" placeholder="Confirmar Contraseña">
        </div>
    </div>
    <br>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" >Cargo Institucional: </label>
        <div  class="col-md-6 col-sm-6 " >
            <select name="rol" id="rol" class="form-control <?php $__errorArgs = ['rol'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($r->id >2): ?>
                    <option value="<?php echo e($r->name); ?>"><?php echo e($r->name); ?></option>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
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
    </div>
    
<br>
<div class="ln_solid"></div>
<div class="item form-group">
    <div class="col-md-6 col-sm-6 offset-md-4">
        <a class="btn btn-danger" href="<?php echo e(route('profesor.index')); ?>" type="button">Cancelar</a>
        <button class="btn btn-primary" type="reset">Limpiar</button>
        <button  type="submit" class="btn btn-success">Registrarse</button>
    </div>
</div>

  </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla.madre', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Sistema-votacion-IDO\resources\views/profesor/create.blade.php ENDPATH**/ ?>