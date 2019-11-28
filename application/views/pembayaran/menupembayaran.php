<!DOCTYPE html>
<html lang="en">
<head>
  <title>Satya Sepatu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <link href="<?php echo base_url();?>assets/vendor/fontawesome-free/css/fontawesome.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->



  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }

    /* Remove the jumbotron's default bottom margin */
     .jumbotron {
      margin-bottom: 0;
    }

    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

      #box1{
        width:600px;
        height:300px;
        margin-left: 25%;
        margin-top:  5%;
        background:white;

      }
  </style>
</head>
<body>

<!-- <div class="jumbotron">
  <div class="container text-center">
    <h1>Online Store</h1>
    <p>Mission, Vission & Values</p>
  </div>
</div> -->

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url();?>Sepatu/index">Satya Sepatu</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span>Halo Alvinda Julian</a></li>
        <li><a href="<?php echo base_url();?>Sepatu/login"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  <div class="container">

    <!-- Outer Row -->
     <div id="box1">
       <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Beli Barang</h1>
                    <!-- <h1 class="h4 text-gray-700 mb-4">A</h1> -->
                  </div>
              <form class="user" method = "POST" action="<?php echo base_url(). 'Sepatu/addPemesanan'; ?>">
                <div class="form-group">
                  <select class="form-control" name="kodesepatu" >
                       <option>-- Pilih Jenis Sepatu!! --</option>
                       <option>SHOE1 - SENDAL GUNUNG</option>
                       <option>SHOE2 - SEPATU SELOP</option>
                       <option>SHOE3 - SNEAKERS BLACK</option>
                       <option>SHOE4 - SNEAKERS WHITE</option>
                       <option>SHOE5 - SEPATU RUNNING</option>
                       <option>SHOE6 - SEPATU EAGLE</option>
                  </select>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="nama" aria-describedby="emailHelp" placeholder="Nama Lengkap" required>
                </div>
                <div class="form-group">
                  <input type="number" class="form-control form-control-user" name="nohp" placeholder="nomor HP" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="alamat" aria-describedby="emailHelp" placeholder="Alamat Lengkap" required>
                </div>
                    <div class="form-group">
                     <select class="form-control" name="metode" >
                          <option>-- Pilih Metode Pembayaran !! --</option>
                          <option>Cash on Delivery</option>
                     </select>
                    </div>

                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Lakukan Transaksi">
                  </form>


     </div>

  </div>

  <!-- <script>
  function myFunction() {
    alert("Berhasil Transaksi");
  }
  </script> -->
</body>
</html>
