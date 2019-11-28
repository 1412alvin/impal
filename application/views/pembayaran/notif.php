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
<center>
<h1> Transaksi Berhasil </h1>
<button style="width: 250px; height: 100px; background-color : #0C79B3;">
  <a style="font-size : 35px; color : white;" href="<?php echo base_url(); ?>Sepatu/index">Kembali ke menu </a>
</button>
</center>
</body>
</html>
