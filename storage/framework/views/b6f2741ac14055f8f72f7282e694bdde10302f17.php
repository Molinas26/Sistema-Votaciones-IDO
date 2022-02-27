
<?php $__env->startSection('titulo'); ?>
Estudiantes Registrados
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>

<style>
    #prueba {
        overflow:auto;
    }
  </style>

<table  id="datatable" class="table table-striped">
    <thead>
    <tr>
        <th scope="col" style="text-align: center">Identidad</th>
        <th scope="col" style="text-align: center">Nombre</th>
        <th scope="col" style="text-align: center">Usuario</th>
        <th scope="col" style="text-align: center">Fecha de Registro</th>
        <th scope="col" style="text-align: center">Detalles</th>
    </tr>
    </thead>

    <tbody>
    <?php $__currentLoopData = $estudiantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estudiante): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($estudiante->identidad); ?></td>
            <td><?php echo e($estudiante->name); ?></td>
            <td><?php echo e($estudiante->user); ?></td>
            <td><?php echo e($estudiante->created_at); ?></td>
            <td>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('estudiante.show')): ?>
                    
                <?php endif; ?>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla.madre', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Sistema-Votaciones-IDO\resources\views/estudiantes/index.blade.php ENDPATH**/ ?>