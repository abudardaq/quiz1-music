

<?php $__env->startSection('content'); ?>

<div class="container">
    <h3>Tambah Data Track</h3> 
    <form action="<?php echo e(url('/track')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="">ID TRACK</label>
            <input type="text" name="track_id" class="form-control">
        </div>
        <div class="form-group">
            <label for="">JUDUL TRACK</label>
            <input type="text" name="track_name" class="form-control">
        </div>
        <div class="form-group">
            <label for="">ID ARTIST</label>
            <input type="text" name="artist_id" class="form-control">
        </div>
        <div class="form-group">
            <label for="">ID ALBUM</label>
            <input type="text" name="album_id" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" value="SIMPAN" class="btn btn-primary">
        </div>
    </form>
</div> 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-quiz1-music\resources\views/track/add.blade.php ENDPATH**/ ?>