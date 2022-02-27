
<?php $__env->startSection('titulo'); ?>
Profesores Registrados
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>

<style>
    #prueba {
        overflow:auto;
    }
  </style>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('profesor.create')): ?>
<a type="buttom" href="<?php echo e(route('profesor.nuevo')); ?>" class="btn btn-primary">Nuevo Profesor</a>
<?php endif; ?>

<table  id="datatable" class="table table-striped">
    <thead>
    <tr>
        <th scope="col" style="text-align: center">Identidad</th>
        <th scope="col" style="text-align: center">Nombre</th>
        <th scope="col" style="text-align: center">Usuario</th>
        <th scope="col" style="text-align: center">Fecha de Registro</th>
        <th scope="col" style="text-align: center">Detalles</th>
        <th scope="col" style="text-align: center">Editar</th>
    </tr>
    </thead>

    <tbody>
    <?php $__currentLoopData = $profesors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profesor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($profesor->identidad); ?></td>
            <td><?php echo e($profesor->name); ?></td>
            <td><?php echo e($profesor->user); ?></td>
            <td><?php echo e($profesor->created_at); ?></td>
            <td>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('profesor.show')): ?>
                    
                <?php endif; ?>
            </td>
            <td>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('profesor.edit')): ?>
                    
                <?php endif; ?>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla.madre', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Sistema-Votaciones-IDO\resources\views/profesor/index.blade.php ENDPATH**/ ?>