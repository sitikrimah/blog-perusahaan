<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />


      <style>


          .background{
            background-image:url("assets/img/log.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            /* background-position:center; */
            height: 1000px;
            background-size: 2000px 800px;
          }
          .content{
            color:rgb(223, 213, 213)(255, 255, 255);
            text-align: center;
            padding:300px 0;
            /* text-shadow: 2px 2px 2px rgb(255, 252, 252); */
          }
          h1{
              line-height: 50px;
            font-size:70px;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
          }
          h2{
              line-height: 80px;
            font-size:50px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif

          }
          .form-container {
                margin-top: 10px;
                margin-bottom: 70px;
             }
            h2{
                margin-top: 10px;
                margin-bottom: 70px;
                text-align: center;
                 font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
            }
        button{
                margin-bottom: 25px;
        }
        {

            margin-top: 20px;
        }

       </style>
</head>
<body>
                            <!-- tableteam-->
                            <section class="page-section" id="team">
                                <div class="row">
                                    <div class="col-1"></div>
                                    <div class="col-10">
                                        <div class="form-container">
                                            <h2> table of criticism and suggestions</h2>
                                          
                                         <table class="table align-middle mb-0 bg-white"  style="margin-left:auto;margin-right:auto">
                                              <thead class="bg-light">
                                                  <tr>
                                                      <th>#</th>
                                                      <th>Nama</th>
                                                      <th>email</th>
                                                      <th>phone</th>
                                                      <th>kritik dan saran</th>
                                                  </tr>
                                               </thead>
                                                <tbody>
                                                 <?php $__currentLoopData = $ks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                      <tr>
                                                          <td><?php echo e($loop->iteration); ?></td>
                                                          <div class="ms-3">
                                                            <p class="fw-bold mb-1"><td><?php echo e($item->nama); ?></td></p>
                                                        </div>
                                                        <div class="ms-3">
                                                            <p class="fw-bold mb-1"><td><?php echo e($item->email); ?></td></p>
                                                        </div>
                                                        <div class="ms-3">
                                                            <p class="fw-bold mb-1"><td><?php echo e($item->No_telp); ?></td></p>
                                                        </div>
                                                        <div class="ms-3">
                                                            <p class="fw-bold mb-1"><td><?php echo e($item->pesan); ?></td></p>
                                                        </div>

                                                      </tr>
                                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                             </tbody>
                                         </table>
                                         <div class="">
                                            <br>    <a href="halamanAdmin"><< back</a>
                                         </div>
                                    </div>
                                    <div class="col-1"></div>
                                </div>
                            </section>
    </table>
</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('halamanAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Blog_tugas_pkl\resources\views/ks.blade.php ENDPATH**/ ?>