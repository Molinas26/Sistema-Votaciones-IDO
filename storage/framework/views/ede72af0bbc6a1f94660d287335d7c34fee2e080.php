
<?php $__env->startSection('titulo'); ?>
Bienvenido
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
<?php if(session('denegar')): ?>
<div class="alert alert-danger">
    <?php echo e(session('denegar')); ?>

</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla.madre', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Sistema-Votaciones-IDO2\resources\views/welcome.blade.php ENDPATH**/ ?>