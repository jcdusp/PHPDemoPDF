
<?php $__env->startSection("title","Register"); ?>
<?php $__env->startSection("content"); ?>
<main class="mt-5">
    <div class="container">
        <div class="row justify-content-center">
         <div class="col-md-4">
            <?php if(session()->has("success")): ?>
                <div class="alert alert-success">
                    <?php echo e(session()->get("success")); ?>

                </div>
            <?php endif; ?>
            <?php if(session()->has("error")): ?>
                <div class="alert alert-success">
                    <?php echo e(session()->get("error")); ?>

                </div>
            <?php endif; ?>
            <div class="card">
                <h3 class="card-header text-center">Register</h3>
                <div class="card-body">
                    <form method="POST" action="<?php echo e(route("register.post")); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group mb-3">
                            <input type="text" placeholder="Fullname"
                                id="name" class="form-control" name="fullname"
                                 autofocus>
                            <?php if($errors->has('fullname')): ?>
                            <span class="text-danger">
                                <?php echo e($errors->first('fullname')); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" placeholder="Email"
                                id="email" class="form-control" name="email"
                                required autofocus>
                            <?php if($errors->has('email')): ?>
                            <span class="text-danger">
                                <?php echo e($errors->first('email')); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group mb-3">
                            <input type="password" placeholder="Password"
                                id="password" class="form-control" name="password"
                                required>
                            <?php if($errors->has('password')): ?>
                            <span class="text-danger">
                                <?php echo e($errors->first('password')); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="d-grid mx-auto">
                            <button type="submit"
                            class="btn btn-dark btn-block">Sign Up</button>      
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> 
</main>     
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.default", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\user\Herd\pdf_reports\resources\views\auth\register.blade.php ENDPATH**/ ?>