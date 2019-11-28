<!DOCTYPE html>
<html lang="en">
<head>
  <title>Satya Sepatu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
        <li><a href="#"><span class="glyphicon glyphicon-user"></span>Halo <?php echo $this->session->userdata('name'); ?></a></li>
        <li><a href="<?php echo base_url();?>Sepatu/login"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <a href="<?php echo base_url();?>Sepatu/viewbarangA" style="color: white">SENDAL GUNUNG</a></div>
        <div class="panel-body">
          <a data-toggle="modal" data-target="#sepatu1"><img src="<?php echo base_url();?>assets/beranda/img/a.jpg" style="width : 330px; height : 300px;"></a></div>
        <div class="panel-footer">Rp175.000,00</div>
        <div class="modal fade" id="sepatu1" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">[SHOE1] SENDAL GUNUNG</h4>
                    </div>
                    <div class="modal-body">
                      <img src="<?php echo base_url();?>assets/beranda/img/a.jpg" style="width : 330px; height : 300px; display : block; margin-left : auto; margin-right : auto;">
                      <p style="font-size : 23px;">Sandal Gunung ini cocok dipakai untuk kegiatan outdoor, Side Guard Protector melindungi sisi bagian luar kaki dari benturan pada saat aktivitas. Bobot Ringan dan Sole empuk nyaman dipakai.</p>
                    </div>
                    <div class="modal-footer">
                      <h4 style="position : absolute; left : 10px; font-size : 30px;"> Rp175.000,00 </h4>
                      <button style="width: 100px; height: 50px; background-color : green; border-radius : 12px;">
                        <a style="font-size : 15px; color : white;" href="<?php echo base_url(); ?>Sepatu/menupembayaran">Beli Barang </a>
                    </div>
                  </div>

                </div>
              </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-danger">
        <div class="panel-heading">
          <a href="<?php echo base_url();?>Sepatu/viewbarangB" style="color: blue;">SEPATU SELOP</a></div>
        <div class="panel-body">
          <a data-toggle="modal" data-target="#sepatu2"><img src="<?php echo base_url();?>assets/beranda/img/b.jpg" style="width : 330px; height : 300px;"></a></div>
        <div class="panel-footer">Rp125.000,00</div>
        <div class="modal fade" id="sepatu2" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">[SHOE2] SENDAL SELOP</h4>
                    </div>
                    <div class="modal-body">
                      <img src="<?php echo base_url();?>assets/beranda/img/b.jpg" style="width : 330px; height : 300px; display : block; margin-left : auto; margin-right : auto;">
                        <p style="font-size : 23px;">Sepatu ini cocok untuk digunakan dalam kegiatan santai namun tetap bisa dipakai untuk kegiatan formal </p>
                    </div>
                    <div class="modal-footer">
                      <h4 style="position : absolute; left : 10px; font-size : 30px;"> Rp125.000,00 </h4>
                      <button style="width: 100px; height: 50px; background-color : green; border-radius : 12px;">
                        <a style="font-size : 15px; color : white;" href="<?php echo base_url(); ?>Sepatu/menupembayaran">Beli Barang </a>
                    </div>
                  </div>

                </div>
              </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-success">
        <div class="panel-heading">
        <a href="<?php echo base_url();?>Sepatu/viewbarangC" style="color: blue;">SNEAKERS BLACK</a></div>
        <div class="panel-body">
          <a data-toggle="modal" data-target="#sepatu3"><img src="<?php echo base_url();?>assets/beranda/img/c.jpg" style="width : 330px; height : 300px;"></a></div>
        <div class="panel-footer">Rp200.000,00</div>
        <div class="modal fade" id="sepatu3" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">[SHOE3] SNEAKERS BLACK</h4>
                    </div>
                    <div class="modal-body">
                      <img src="<?php echo base_url();?>assets/beranda/img/c.jpg" style="width : 330px; height : 300px; display : block; margin-left : auto; margin-right : auto;">
                      <p style="font-size : 23px;">Cocok untuk aktivitas sehari-hari karena bahannya yang nyaman untuk kaki serta modelnya yang sangat stylish</p>
                    </div>
                    <div class="modal-footer">
                      <h4 style="position : absolute; left : 10px; font-size : 30px;"> Rp200.000,00 </h4>
                      <button style="width: 100px; height: 50px; background-color : green; border-radius : 12px;">
                        <a style="font-size : 15px; color : white;" href="<?php echo base_url(); ?>Sepatu/menupembayaran">Beli Barang </a>
                    </div>
                  </div>

                </div>
              </div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="<?php echo base_url();?>Sepatu/viewbarangD" style="color: white;">SNEAKERS WHITE</a></div>
        <div class="panel-body">
          <a data-toggle="modal" data-target="#sepatu4"><img src="<?php echo base_url();?>assets/beranda/img/d.jpg" style="width : 330px; height : 300px;"></a></div>
        <div class="panel-footer">Rp200.000,00</div>
        <div class="modal fade" id="sepatu4" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">[SHOE4] SNEAKERS WHITE</h4>
                    </div>
                    <div class="modal-body">
                      <img src="<?php echo base_url();?>assets/beranda/img/d.jpg" style="width : 330px; height : 300px; display : block; margin-left : auto; margin-right : auto;">
                      <p style="font-size : 23px;"> Sangat cocok untuk kamu uang menyukai model sepatu yang simpel namun tetap bisa dipakai dalam berbagai kegatan</p>
                    </div>
                    <div class="modal-footer">
                      <h4 style="position : absolute; left : 10px; font-size : 30px;"> Rp200.000,00 </h4>
                      <button style="width: 100px; height: 50px; background-color : green; border-radius : 12px;">
                        <a style="font-size : 15px; color : white;" href="<?php echo base_url(); ?>Sepatu/menupembayaran">Beli Barang </a>
                    </div>
                  </div>

                </div>
              </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
        <a href="<?php echo base_url();?>Sepatu/viewbarangE" style="color: white;"> SEPATU RUNNING</a></div>
        <div class="panel-body">
          <a data-toggle="modal" data-target="#sepatu5"><img src="<?php echo base_url();?>assets/beranda/img/e.jpg" style="width : 330px; height : 300px;"></a></div>
        <div class="panel-footer">Rp.210.000,00</div>
        <div class="modal fade" id="sepatu5" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">[SHOE5] SEPATU RUNNING</h4>
                    </div>
                    <div class="modal-body">
                      <img src="<?php echo base_url();?>assets/beranda/img/e.jpg" style="width : 330px; height : 300px; display : block; margin-left : auto; margin-right : auto;">
                      <p style="font-size : 23px;">Bahannya yang ringan serta modelnya yang cocok dengan gaya anak muda, sepatu ini sangat cocok unutk kamu yang senang berolahraga dan tetap terlihat bergaya</p>
                    </div>
                    <div class="modal-footer">
                      <h4 style="position : absolute; left : 10px; font-size : 30px;"> Rp210.000,00 </h4>
                      <button style="width: 100px; height: 50px; background-color : green; border-radius : 12px;">
                        <a style="font-size : 15px; color : white;" href="<?php echo base_url(); ?>Sepatu/menupembayaran">Beli Barang </a>
                    </div>
                  </div>

                </div>
              </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
        <a href="<?php echo base_url();?>Sepatu/viewbarangF" style="color: white;">SEPATU EAGLE</a></div>
        <div class="panel-body">
          <a data-toggle="modal" data-target="#sepatu6"><img src="<?php echo base_url();?>assets/beranda/img/f.jpg" style="width : 330px; height : 300px;"></a></div>
        <div class="panel-footer">Rp.225.000,00</div>
        <div class="modal fade" id="sepatu6" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">[SHOE6] SENDAL EAGLE</h4>
                    </div>
                    <div class="modal-body">
                      <img src="<?php echo base_url();?>assets/beranda/img/f.jpg" style="width : 330px; height : 300px; display : block; margin-left : auto; margin-right : auto;">
                      <p style="font-size : 23px;">Cocok untuk anak sekolah karena model simpel dan bahannya sangat nyaman di kaki</p>
                    </div>
                    <div class="modal-footer">
                      <h4 style="position : absolute; left : 10px; font-size : 30px;"> Rp225.000,00 </h4>
                      <button style="width: 100px; height: 50px; background-color : green; border-radius : 12px;">
                        <a style="font-size : 15px; color : white;" href="<?php echo base_url(); ?>Sepatu/menupembayaran">Beli Barang </a>
                    </div>
                  </div>

                </div>
              </div>
      </div>
    </div>
  </div>
</div><br><br>

<footer class="container-fluid text-center">

      Created By : Satya Sepatu 2019
  </footer>

<!-- </footer> -->

</body>
</html>
