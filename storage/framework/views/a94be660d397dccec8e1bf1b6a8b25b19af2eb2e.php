

<?php $__env->startSection('content'); ?>

<div class="container">

    <h3>Edit Data Album</h3>
    <form action="<?php echo e(url('/album/' . $row->album_id)); ?>" method="POST">
        <input name="_method" type="hidden" value="PATCH">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="">ID ALBUM</label>
            <input type="text" name="album_id" class="form-control" value="<?php echo e($row->album_id); ?>">
        </div>
        <div class="form-group">
            <label for="">ID ARTIST</label>
            <input type="text" name="artist_id" class="form-control" value="<?php echo e($row->artist_id); ?>">
        </div>
        <div class="form-group">
            <label for="">NAMA ALBUM</label>
            <input type="text" name="album_name" class="form-control" value="<?php echo e($row->album_name); ?>">
        </div>
        <div class="form-group">
            <input type="submit" value="SIMPAN" class="btn btn-primary">
        </div>
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-quiz1-music\resources\views/album/edit.blade.php ENDPATH**/ ?>