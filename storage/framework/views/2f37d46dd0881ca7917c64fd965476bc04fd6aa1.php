<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Fontawesome 6 cdn -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer' />

    <!-- Usando Vite -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>
</head>

<body>
    <div id="app">

        <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-3 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/">BoolPress</a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <input class="form-control form-control-dark w-100" type="text" Placeholder="Search">
            <div class="navbar nav">
                <div class="nav-item text-nowrap ms-2">
                    <a class="btnblue" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <?php echo e(__('Logout')); ?>

                    </a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                        <?php echo csrf_field(); ?>
                    </form>
                </div>
            </div>
        </header>
        <div class="container-fluid vh-100">
            <div class="row h-100">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark navbar-dark sidebar collapse">
                    <div class="position-sticky pt-3">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link text-white <?php echo e(Route::currentRouteName() == 'admin.dashboard' ? 'bg-secondary' : ''); ?>" href="<?php echo e(route('admin.dashboard')); ?>">
                                    <i class="fa-solid fa-tachometer-alt fa-lg fa-fw"></i> Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white <?php echo e(Route::currentRouteName() == 'admin.projects.index' ? 'bg-secondary' : ''); ?>" href="<?php echo e(route('admin.projects.index')); ?>">
                                    <i class="fa-solid fa-newspaper fa-lg fa-fw"></i> 
                                    Projects
                                </a>
                                <a class="nav-link text-white <?php echo e(Route::currentRouteName() == 'admin.projects.create' ? 'bg-secondary' : ''); ?>" href="<?php echo e(route('admin.projects.create')); ?>">
                                    <i class="fa-solid fa-square-plus fa-lg fa-fw"></i>
                                    Aggiungi un nuovo progetto
                                </a>
                                <a class="nav-link text-white <?php echo e(Route::currentRouteName() == 'admin.types.index' ? 'bg-secondary' : ''); ?>" href="<?php echo e(route('admin.types.index')); ?>">
                                    <i class="fa-solid fa-newspaper fa-lg fa-fw"></i> 
                                    Livelli di difficoltà
                                </a>
                                <a class="nav-link text-white <?php echo e(Route::currentRouteName() == 'admin.types.create' ? 'bg-secondary' : ''); ?>" href="<?php echo e(route('admin.types.create')); ?>">
                                    <i class="fa-solid fa-square-plus fa-lg fa-fw"></i>
                                    Aggiungi un nuovo livello di difficoltà
                                </a>
                                <a class="nav-link text-white <?php echo e(Route::currentRouteName() == 'admin.tags.index' ? 'bg-secondary' : ''); ?>" href="<?php echo e(route('admin.tags.index')); ?>">
                                    <i class="fa-solid fa-tag fa-lg fa-fw"></i>
                                    Tags
                                </a>
                                <a class="nav-link text-white <?php echo e(Route::currentRouteName() == 'admin.tags.create' ? 'bg-secondary' : ''); ?>" href="<?php echo e(route('admin.tags.create')); ?>">
                                    <i class="fa-solid fa-tag fa-lg fa-fw"></i>
                                    Aggiungi un nuovo tag
                                </a> 
                            </li>

                        </ul>
                    </div>
                </nav>

                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 bg-dark">
                    <?php echo $__env->yieldContent('content'); ?>
                </main>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\MAMP\htdocs\laravel\laravel_vite\laravel-api\resources\views/layouts/admin.blade.php ENDPATH**/ ?>