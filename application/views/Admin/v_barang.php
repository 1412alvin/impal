<head>
<title>Data Barang</title>
</head>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>



          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">





            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Halo <?php echo $this->session->userdata('name');?></span>
                <img class="img-profile rounded-circle" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARsAAACyCAMAAABFl5uBAAAAM1BMVEXEzeD////Ayt7g5e73+Pvs7/W+yN3Z3+vK0uPd4u37/P3y9PjGzuHV2+nq7fTl6fHP1uW6MLviAAAElElEQVR4nO2dC5aDIAxFNVb81db9r3a0nfac6UhbSPj4yF2B3hNDgIBVpSiKoiiKoigZQESpHyE/iExV9fMwDEvqR8kKMn13ncb6ly7182TCFi5d+9Sy0aZ+phxYU8vSnOoXOk0463fUtK9eVubS1RD1l3FHTF0vhatZI2ZfzIpJ/XBJMfNkE1O2G6o6a8jcmPpSPyrzwczGUGTo0PLZzBY65/JChy7fmNkobRz/MmjuXIuSY5rvzdy+q9QPHA/aK4HfMRYzXtG/WdNnCqmQfdQUkpH91KyVDr4c45pryokcGnzVrDkn9cMHpvdXU9fYQ7nxTDZ3TtBfVcdRg10h88JmpU/9BuGYmWrqE+ySxfdzbytz6ncIBltN3aJmHNYA/kvqdwgFO93UsNmY3FZt9gFNOOrGjrqxo27siLgBbccRcdNgFjjqxo66seO89aJu1E2lbt6hbuyoGzvqxo7Ash+uG40bK7474epG3aibfdSNHXVjR93YUTd21I0ddWNH3dhRN3bUjR11Y4XYHW2wbs7DF8fsPjMYPDkkIWZlmvBat4yMmg24dgF1Y8cIfVOIbkQWi++kfhVxBN3A9V+rGzt0VTc2RJpvbkxw9Q33eBC0G4mm9BuAh6jOUm4AZ5tihTFc6SdYGAMe9xUrcBBP+wolY8hjiULJGDAVC7VtoR4ukziSiFj5bXDuoniCGTacO0ye4N69yh6qQL+ojYXrBnAu9YC9ewdYEz9gD+OIdd8DZsKBvgCHWeJA1sQPmAsVwOmG7QY5bJjJ+ALthreiDnpu/gnHDfIIXvE+KrzGmxcY0wboUWrDf9owgX9SFSNwAPdeXvHdb4CeLzzw7IpEXfD7i9ekqoCrnTfIYzYOP34/8JADP34/cd8bR9zo3Yec46YcN+7bv+W4cc83xbgh95WKcty494yW48Z92lCOG/dFnFJKP4+4GfHXJ37xONRajBuPnRh1o258FimKceOxLFqKG48lihHwVPge3eBe+o3XIfVjR8C7y2RM/eTBYZz4gG6+2eA0boG7YZ1oBd+FoXd/mf8E+MYm63og8PYbVk8bcOP1Bq8xHbo4Npx0A77vyzzPgNxKwW7ZR975ZaoBPiIkcO4O1Y3E/X6IN9itYhaRC3BOXQVmh6iTuBPyTrsABY/p5e5MujEOPYQdMh2v4Nun7Q4fPHQWu0rqH82RM8+af+UuZ9ujnemYesgMcvnXxtgc0A5J518rl4MNW6E/pr9Mx6kIqZrDf0wvXM9HsEPUyN0468Cal1O/+gfoLHMBkA9jl3NejptmdmhyrZdpDlEAO9L2+S0qE8VPwPtMS2aflhGcZ7M5ZTTXWmMmydBkZxwyiR0j8k8KaYYMZqLZxcyTa+LYMblk4F1SrmJQn8Go/Y6xSZSVqUpXA39PkgsBjdgF6GE5LbHtUJV4euBA5N4UnyPe6Yh6uNyEWyEPQhtvkiX4j45IRJNztKjZiNScLHINcXTijFbsy2TTEOM0rPt9CXkQ4XJAoRvhExC+rV3sty7RCd4Qd8xEfCd04Aj+mi06ocdxwd9kRif031KO7MZ5GP8BqZRCubvOZ/YAAAAASUVORK5CYII=">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
            </div>
			<div class="card-header py-2">
              <a href="<?php echo base_url(). 'sepatu/inputbarang'; ?>"><button class= "btn btn-success"><i class="fa fa-plus" ></i> Tambah </button></a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Kode Barang</th>
                      <th>Merk</th>
                      <th>Ukuran</th>
                      <th>Jumlah</th>
                      <th>Harga</th>
                      <th>Action</th>
                    </tr>
                  </thead>
				   <?php foreach ($barang as $row) { ?>
                  <tbody>
				    <tr>
					 <td><?php echo $row->kode ?></td>
				     <td><?php echo $row->merk ?></td>
				     <td><?php echo $row->ukuran ?></td>
				     <td><?php echo $row->jumlah ?></td>
				     <td><?php echo $row->harga ?></td>
					 <td>
					 <a href="<?php echo base_url('sepatu/formeditbarang/'.$row->kode); ?>"><button class="btn btn-success"><i class="fa fa-edit" ></i> Edit </button></a>
					 <a href="<?php echo base_url('sepatu/deletebarang/'.$row->kode); ?>"><button class="btn btn-danger"><i class="fa fa-trash" ></i> Delete </button></a></td>
				   </tr>
                  </tbody>
				   <?php } ?>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Satya Sepatu 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Apakah anda yakin></div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo base_url(). 'sepatu/logout'; ?>">Logout</a>
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

  <!-- Page level plugins -->
  <script src="<?php echo base_url();?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url();?>assets/js/demo/datatables-demo.js"></script>

</body>

</html>
