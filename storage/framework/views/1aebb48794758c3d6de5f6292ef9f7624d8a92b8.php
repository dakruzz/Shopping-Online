<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route("sites.postAddProduct")); ?>" method="POST" class="addProduct">
        <?php echo e(csrf_field()); ?>

        <div class="form-group">
            <label for="title">Title:</label>
            <input name="title" type="text" class="form-control" id="title" required>
        </div>
        <div class="form-group">
            <label for="imagePath">Image Path:</label>
            <input name="imagePath" type="text" class="form-control" id="imagePath" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <input name="description" type="text" class="form-control" id="description" required>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input name="price" type="text" class="form-control" id="price" placeholder="example: 00.00" required>
        </div>
        <div class="form-group">
            <label for="category">Category:</label>
            <input name="category" type="text" class="form-control" id="category" required>
        </div>

        <div class="checkbox">
            <label><input type="checkbox">Confirm</label>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>