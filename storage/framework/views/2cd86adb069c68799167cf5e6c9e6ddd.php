<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Admin - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">


</head>

<body id="page-top">
<div class="col-3"></div>
    <!-- Page Wrapper -->
    <div id="wrapper">


        <!-- Sidebar -->
        
          <ul class="navbar-nav bg-gradient- sidebar sidebar-dark accordion" id="accordionSidebar" Style="background-color: rgb(158, 158, 242);">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                 <div class="sidebar-brand-icon rotate-n-15">
                    <i class='fas fa-piggy-bank' style='font-size:36px'></i>
                </div> 
                <div class="sidebar-brand-text mx-3">savings <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="dasboard">
                 
                 <i class="fa fa-dashboard" style="font-size:24px"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="admin">
                 
                 <i class="fa fa-admin" style="font-size:24px"></i>
                    <span>Admin</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                
            </div>
            <!--anggota-->

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <i class='fas fa-user-tie' style='font-size:24px'></i>
                    <span>Anggota</span>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom anggota:</h6>
                        
                        <a class="collapse-item" href="siswa">siswa</a>
                        <a class="collapse-item" href="kelas">kelas</a>
                        <a class="collapse-item" href="siswakelas">Siswa kelas</a>
                        <a class="collapse-item" href="tahun">Tahun ajaran</a>
                    </div>
                </div>
            </li>
        
            <!--List harian-->
            <li class="nav-item">
                <a class="nav-link" href="tabungan">
                    <i class='fas fa-sign-in-alt' style='font-size:24px'></i>
                    <span>tabungan</span></a>
            </li>            
            <!--List harian-->
            <li class="nav-item">
                <a class="nav-link" href="notabungan">
                    <i class='fas fa-barcode' style='font-size:24px'></i>
                    <span>no tabungan</span></a>
            </li>

            
            <!-- Nav Item - Utilities Collapse Menu -->
            
                        
            
              <!-- Divider -->
              <hr class="sidebar-divider">
                          <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"  style="font-size:24px"></i>
                    <span>account</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom account:</h6>
                        
                        <a class="collapse-item" href="loginAdmin">Login</a>
                        <a class="collapse-item" href="logout">Logout</a>
                    </div>
                </div>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                
            </div>
        </ul>
        <div class="col-9 justipy-conten-center py-5 mt-5">
      <center>     <h2>Hallo Selamat Datang</h2> </center>
      <a href="home"></a>
       
        </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>

    

</body>

</html><?php /**PATH C:\xampp\htdocs\Blog_tugas_pkl\resources\views/welcome.blade.php ENDPATH**/ ?>