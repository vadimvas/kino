<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
    
    <title>KINOPOISK</title>
</head>
<body>
    <header>

        <?php echo $__env->make('components.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
    </header>
          
    <main>
        <div class="container-fluid">
            <div class="d-flex flex-wrap align-items-center justify-content-around ">
                <?php echo $__env->yieldContent('main'); ?>
            </div>
        </div>
    </main>
           

                  
                    




    <footer class="py-3 mt-auto " >
        <p class="text-center text-body-white">© 2024 Кинопоиск Lite</p>
    </footer>
  
    <script src="<?php echo e(asset('assets/js/bootstrap.bundle.min.js')); ?>"  ></script>  
</body>
</html><?php /**PATH C:\Users\user\Desktop\Сайты на LARE\КИНОПОИСК\resources\views/tamplates/main.blade.php ENDPATH**/ ?>