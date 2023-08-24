<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">

                    <div class="mb-md-5 mt-md-4 pb-5">
                        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                    
                    <form action="" method="post">
                        <?php echo csrf_field(); ?>

                            

                            <div class="form-outline form-white mb-4">
                                <input type="name" id="typeNamelX" class="form-control form-control-lg" />
                          <label class="form-label" for="form3Example1c">Your Name</label>
                            <div class="form-outline form-white mb-4">
                                <input type="email" id="typeEmailX" class="form-control form-control-lg" />
                                   <label class="form-label" for="form3Example3c">Your Email</label>
                            </div>

                            </div>

                            <div class="form-outline form-white mb-4">
                                <input type="password" id="typePasswordX" class="form-control form-control-lg" />
                          <label class="form-label" for="form3Example4c">Password</label>
                          
                            </div>

                            <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

                            <a  class="btn btn-outline-light btn-lg px-5 btn btn-submit" type="submit" >Login</a>

                            <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                            </div>
                    </form>
                    </div>

                    <div>
                    <p class="mb-0">Don't have an account? <a href="" class="text-white-50 fw-bold">Sign Up</a>
                    </p>
                    </div>

                </div>
                </div>
            </div>
            </div>
        </div>
    </section>

</body>
</html>


<?php /**PATH C:\xampp\htdocs\Blog_tugas_pkl\resources\views/registerAdmin.blade.php ENDPATH**/ ?>