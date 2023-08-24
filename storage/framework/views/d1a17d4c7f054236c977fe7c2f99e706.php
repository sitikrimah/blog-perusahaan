<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="table">
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>email</th>
            <th>phone</th>
            <th>pesan</th>
            <th>Aksi</th>
        </tr>
        <?php $__currentLoopData = $kritik; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($key+1); ?></td>
            <td><?php echo e($item->nama); ?></td>
            <td><?php echo e($item->email); ?></td>
            <td><?php echo e($item->phone); ?></td>
            <td><?php echo e($item->pesan); ?></td>
            
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Blog_tugas_pkl\resources\views/kritik.blade.php ENDPATH**/ ?>