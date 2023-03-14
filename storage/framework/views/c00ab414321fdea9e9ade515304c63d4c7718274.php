
<?php $utils = app('App\Utils\Utils'); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="text-center text-white mt-4">
        <h1>Benvenuto nei tuoi progetti!</h1>
    </div>
    <div>
        <a href="<?php echo e(route('admin.projects.create')); ?>" class="btnblue m-5">
            <i class="fa-solid fa-plus-square fa-fw fa-lg mr-2"></i>
            Aggiungi un nuovo progetto.
        </a>
        <div class="mt-3">
            <?php if(session('message')): ?>
            <div class="alert alert-primary">
                <?php echo e(session('message')); ?>

            </div>
            <?php endif; ?>
        </div>
    </div>
    <div id="index">
        <?php $__empty_1 = true; $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <section class="card">
            <article class="containerImagenCard">
                <img src="https://cdn.pixabay.com/photo/2018/02/07/14/27/pension-3137209_640.jpg" alt="">
            </article>
            <article class="containerDescriptionCard">
                <p class="titleCard">Progetto:</p>
                <p class="titleCard"><?php echo e($project->title); ?></p>
                <p class="tecnologiesCard">Data: <?php echo e($utils->changeDate($project->date_project)); ?></p>
                <p class="tecnologiesCard"><?php echo e($project->slug); ?></p>
                <p class="tecnologiesCard">
                    Linguaggi:  
                    <?php $__empty_2 = true; $__currentLoopData = $project->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                    <?php echo e($tag->name); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                    Nessun tag associato al post
                    <?php endif; ?></p>
                <p class="tecnologiesCard">Difficoltà: <?php echo e($project->type ? $project->type->name : 'Mancante'); ?></p>
                <p class="descriptionCard">Contenuto: <?php echo e($project->content); ?></p>
            </article>
            <div class="d-flex justify-content-end m-3 gap-2">
                <a class="btn btn-sm btn-square btn-primary" href="<?php echo e(route('admin.projects.show', $project->slug)); ?>" title="Visualizza project"><i class="fas fa-eye"></i></a>
                <a class="btn btn-sm btn-square btn-warning" href="<?php echo e(route('admin.projects.edit', $project->slug)); ?>" title="Modifica project"><i class="fas fa-edit"></i></a>
                <form class="d-inline-block" action="<?php echo e(route('admin.projects.destroy', $project->slug)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button class="btn btn-danger btn-sm btn-square confirm-delete-button" type="submit" title="Cancella project">
                        <i class="fas fa-trash"></i>
                    </button>
                </form>
            </div>
        </section>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-lg-8 col-md-10 col-sm-12">
                    <div class="alert alert-primary text-center" role="alert">
                        <h4 class="alert-heading mb-4">Il database dei tuoi project è vuoto</h4>
                        <p class="lead">Clicca sul pulsante "Aggiungi Project" per aggiungerli.</p>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
    <?php echo $__env->make('admin.partials.modals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\htdocs\laravel\laravel_vite\laravel-api\resources\views/admin/projects/index.blade.php ENDPATH**/ ?>