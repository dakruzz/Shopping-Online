<?php $__env->startSection('content'); ?>


<div class="container">
    <div class="row">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 product">
            <div class="thumbnail">
                <img src="<?php echo e($product->imagePath); ?>" alt="<?php echo e($product->title); ?>" class="img-responsive">
                <div class="caption">
                    <h3 class="text-center"><?php echo e($product->title); ?></h3>
                    <p><?php echo e($product->description); ?></p>
                    <a href="<?php echo e(route('sites.addToCart', $product->id)); ?>" class="btn btn-primary add" role="button">Add to Cart</a>
                    <span class="label label-success productLabel">$<?php echo e($product->price); ?></span>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>