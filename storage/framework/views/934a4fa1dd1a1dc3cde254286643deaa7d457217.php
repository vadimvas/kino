


<?php $__env->startSection('main'); ?>

   <?php echo $__env->make('components/movie',['movie'=>$movie,'categories'=>$categories], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('tamplates.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\Сайты на LARE\КИНОПОИСК\resources\views/pages/movieID.blade.php ENDPATH**/ ?>