

<?php $__env->startSection('content'); ?>

    <div class="container">

        <h3>Daftar Artist
        <a href="<?php echo e(url('/artist/create')); ?>" class="btn btn-primary btn-sm float-right">Tambah Data</a></h3>        

        <table class="table table-bordered">    
            <tr>
                <td>ID ARTIST</td>
                <td>NAMA ARTIST</td>
                <td>EDIT</td>
                <td>DELETE</td>
            </tr>
            <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($row->artist_id); ?></td>
                <td><?php echo e($row->artist_name); ?></td>
                <td><a href="<?php echo e(url('artist/' . $row->artist_id . '/edit')); ?>" class="btn btn-primary btn-sm">Edit</a></td>
                <td>
                    <form action="<?php echo e(url('/artist/' . $row->artist_id)); ?>" method="POST">
                    <input name="_method" type="hidden" value="DELETE">
                        <?php echo csrf_field(); ?>
                        <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-quiz1-music\resources\views/artist/index.blade.php ENDPATH**/ ?>