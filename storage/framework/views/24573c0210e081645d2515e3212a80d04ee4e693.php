

<?php $__env->startSection('main'); ?>
<div class="form-signin w-100 m-auto">
    <form action="<?php echo e(route('loginCheck')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="d-flex" style="align-items: center; justify-content: space-between">
                <h2 style="color:white">Вход</h2>
                <a href="/" class="d-flex align-items-center mb-5 mb-lg-0 text-white text-decoration-none">
                    <h5 class="m-0">Кинопоиск <span class="badge bg-warning warn__badge">Lite</span></h5>
                </a>
            </div>
            <div class="form-floating mt-3">
                <input
                    type="email"
                    class="form-control"
                    name="email"
                    id="floatingInput"
                    placeholder="name@areaweb.su"
                >
                <label for="floatingInput">E-mail</label>
            </div>
            <div class="form-floating">
                <input
                    type="password"
                    name="password"
                    class="form-control"
                    id="floatingPassword"
                    placeholder="Пароль"
                >
                <label for="floatingPassword">Пароль</label>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Войти</button>
           
        </form>
    </div>
   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('tamplates.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\Сайты на LARE\КИНОПОИСК\resources\views/pages/login.blade.php ENDPATH**/ ?>