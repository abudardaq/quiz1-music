

<?php $__env->startSection('content'); ?>

<div class="container">
    <h3>Tambah Data Artist</h3> 
    <form action="<?php echo e(url('/artist')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="">ID ARTIST</label>
            <input type="text" name="artist_id" class="form-control">
        </div>
        <div class="form-group">
            <label for="">NAMA ARTIST</label>
            <input type="text" name="artist_name" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" value="SIMPAN" class="btn btn-primary">
        </div>
    </form>
</div> 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-quiz1-music\resources\views/artist/add.blade.php ENDPATH**/ ?>