<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <section class="vh-100 gradient-custom">
            <div class="container py-5  h-100">
                <div class="row  d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                      <div class="card bg-dark text-white" style="border-radius: 1rem;">
                           <div class="card-body p-5 text-center">
                                <div class="mb-md-5 mt-md-4 pb-5">
                                    <div class="w-200 center rounded px-3 py-3 mx-auto">
                                      <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                            <?php if($errors->any()): ?>
                                            <div class="alert alert-danger">
                                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><?php echo e($item); ?></li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                            <?php endif; ?>
                                       <form action="" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <div class="form-outline form-white mb-4">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" value="<?php echo e(old('email')); ?>" name="email" class="form-control form-control-lg">
                                                </div>
                                                <div class="form-outline form-white mb-4">
                                                    <label for="password" class="form-label">Password</label>
                                                    <input type="password" name="password" class="form-control form-control-lg">
                                                </div>
                                                <div class="mb-3 d-grid">
                                                    <button name="submit" type="submit" class="btn btn-primary ">Login</button>
                                                </div>
                                        </form>
                                    </div>
                                </div>
                           </div>
                      </div>
                 </div>
             </div>
         </div>
    </section>
</body>
</html>


<?php /**PATH C:\xampp\htdocs\Blog_tugas_pkl\resources\views/login.blade.php ENDPATH**/ ?>