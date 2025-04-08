
<?php $__env->startSection("title","Login"); ?>
<?php $__env->startSection("content"); ?>
<main class="mt-5">
    <div class="container">
        <div class="row justify-content-center">
         <div class="col-md-4">
            <div class="card">
                <h3 class="card-header text-center">PHP DEMO APPLICATION</h3>
                <div class="card-body">
                        <div class="d-grid mx-auto">
                        <li><a href="<?php echo e(url('register')); ?>" class="btn btn-primary">
                         New User Registration </a> </li> <br/>
                         <li><a href="<?php echo e(url('login')); ?>" class="btn btn-primary">
                         Login </a> </li> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> 
</main>     
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.default", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\user\Herd\pdf_reports\resources\views/default.blade.php ENDPATH**/ ?>