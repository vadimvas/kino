<?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div>
    <a href="<?php echo e(route('movieID',['id'=>$movie['id']])); ?>" class="card text-decoration-none movies__item">

        <div class="movies-image-body">

            <img src="<?php echo e($movie->preview ?? NULL); ?>" height="200px" class="card-img-top" alt="image">
        </div>

        <h5 class="card-title"><?php echo e($movie['name']); ?></h5>
        <div class="movies-title-body">
            <p class="card-text">Оценка <span class="badge bg-warning warn__badge"><?php echo e($movie['rating']); ?></span></p>
        </div>
        <div class="rating-mini">
            <?php for($i = 1; $i <= 10; $i++): ?>
                <?php if($movie['rating'] >= $i): ?>
                <span class="active"> </span>
                <?php else: ?>
                <span> </span>    
                <?php endif; ?>	 	 
                
            <?php endfor; ?>
        </div>

    </a>

</div>
    
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\Users\user\Desktop\Сайты на LARE\КИНОПОИСК\resources\views/components/list.blade.php ENDPATH**/ ?>