

<?php $__env->startSection('main'); ?>

    <div class="container">
        <h3 class="mt-3" style="color:white">Добавление фильма</h3>
        <hr>
    </div>
    <div class="container">
        <form action="<?php echo e(route('addmovieCheck')); ?>" method="post" enctype="multipart/form-data" class="d-flex flex-column justify-content-center w-50 gap-2 mt-5 mb-5">
            <?php echo csrf_field(); ?>
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="name" name="name">
                        <label for="name">Название</label>
                    </div>
                </div>
            </div>
                      
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating">
                        <textarea style="height: 100px" type="text" class="form-control" id="description" name="description"></textarea>
                        <label for="description">Описание</label>
                    </div>
                </div>
            </div>
                    
            <div class="row g-2">
                <div class="col-md">
                    <div class="mb-3">
                        <label for="image" class="form-label" style="color:white">Изображение</label>
                        <input class="form-control" type="file" name="image" id="image">
                    </div>
                </div>
            </div>
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="imageText" name="preview" placeholder="Ссылка на изображение"
                            value="https://kinopoiskapiunofficial.tech/images/posters/kp/..  .jpg"
                        >
                        <label for="preview">Ссылка на изображение</label>
                      
                    </div>
                </div>
            </div>
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating">
                        <input
                            type="text"
                            class="form-control"
                            id="srcvideo"
                            name="srcvideo"
                            placeholder="Ссылка на видео"
                            value="https://vk.com/video_ext.php?oid=-220018529&id=..&hash=44feb16bce7906e8"
                        >
                        <label for="srcvideo">Ссылка на видео</label>
                      
                    </div>
                </div>
            </div>
            
            <div class="row g-2">
                <label for="category_id" style="color:white" >Выберите жанр</label>
                <select class="form-select" name="category_id">
                <option  selected></option>
             
                <?php foreach($categories as $category){  ?>
                    <option value="<?= $category['id'] ?>"><?= $category['name']?></option>
                <?php } ?>
                    
                    
                   
                 
                </select>
               
            </div>
            <div class="row g-2">
                <button class="btn btn-primary">Добавить</button>
            </div>
        </form>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('tamplates.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\Сайты на LARE\КИНОПОИСК\resources\views/pages/addmovie.blade.php ENDPATH**/ ?>