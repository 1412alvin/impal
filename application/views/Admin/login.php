<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Custom fonts for this template-->
    <link href="<?php echo base_url();?>assets/vendor/fontawesome-free/css/fontawesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url();?>assets/dist/css/sb-admin-2.min.css" rel="stylesheet">
   <link href="<?php echo base_url();?>assets/dist/css/sb-admin-2.css" rel="stylesheet">
  <link href="<?php echo base_url();?>/assets/bower_components/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/dist/css/custom.css" rel="stylesheet">

</head>

<body class="">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-19 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-10">
            <!-- Nested Row within Card Body -->
            <a href = "<?php echo base_url();?>Sepatu/beranda"><img src="https://cdn0.iconfinder.com/data/icons/lineo-internet/100/romzicon_home-512.png" style="width: 35px; height: 35px;"></a>
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-img"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome To Satya Sepatu</h1>
                    <!-- <h1 class="h4 text-gray-700 mb-4">A</h1> -->
                  </div>
                  <form class="user" method = "POST" action="<?php echo base_url(). 'Sepatu/loginA'; ?>">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="username" aria-describedby="emailHelp" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">

                    </div>
                    <input type="submit" value="Login" class="btn btn-primary btn-user btn-block">



                  </form>
                  <hr>

                  <div class="text-center">
                    <a class="small" href="<?php echo base_url();?>Sepatu/register">Saya Belum Memiliki Akun</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url();?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url();?>assets/js/sb-admin-2.min.js"></script>

</body>

</html>
