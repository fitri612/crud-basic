<?php
    include "koneksi.php";
    $sql=mysqli_query($conn, "SELECT * from perpustakaan");

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Perpustakaan</title>
  <!-- display -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
          function tanya(){
              if(confirm("Apakah Anda yakin akan menghapus barang ini?")){
                  return true;
              }
              else{
                  return false;
              }
          }
      </script>
  <!-- css -->
  <link rel="stylesheet" href="style.css">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
</head>
<style>
  .btn-log{
    padding:5px 20px ;
    color: white;
    border: 1px solid white;
    border-radius: 5px;
    font-size:10px;
    background-color:rgba(0, 0, 0, 0) ;
  }
  h2{
    margin-left: 180px;
    font-weight: bold;
  }
  .edit{
      padding-left: 180px;
  }
  .form-group{
      width: 80%;
      margin-left: 240px;
  }
  .container-1{
      width: 45%;
      margin-left: 400px;
  }
  .buttonku{
      margin-left: 240px;
  }
  .container-2{
      width: 45%;
      margin-left: 400px;
  }
  .simpan-reset{
      margin-left: 240px;
  }
  .nav-item:hover{
    background-color: lightblue;
    cursor: pointer;
}

 
</style>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-info navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <h5 style="color: white;font-size: 15px;font-weight: 700; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">PERPUSTAKAAN</h5>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <p style="color: white;margin-top: 3%;">Monday, 04 Januari 2021 &ensp;</p>
      <button class="btn-log">LOG OUT</button>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-info elevation-4">
    <img src="img/3928616.png" style="width: 20%;margin-top: 5%;margin-left: 40%;" alt="">

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item has-treeview menu-open">
                <a href="./index.php" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
              <li class="nav-item has-treeview menu-open">
                <a href="./form_.php" class="nav-link">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>
                    Post & List
                  </p>
                </a>
              </li>
              <li class="nav-item has-treeview menu-open">
                <a href="./list.html" class="nav-link">
                  <i class="nav-icon fas fa-user-alt"></i>
                  <p>
                    User List 
                  </p>
                </a>
              </li>
              <li class="nav-item has-treeview menu-open">
                <a href="./setting.html" class="nav-link">
                  <i class="nav-icon fas fa-cog"></i>
                  <p>
                   Settings 
                  </p>
                </a>
              </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<!-- search Form
<form class="form-inline ml-3">
    <div class="input-group input-group-sm">
      <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-navbar" type="submit">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>
  </form> -->

<div class="container">
  <center><h2 style="margin-top: 20px; font-weight: bold;">Data Buku</h2></center>
  <center><h2 style="margin-top: 5px; font-weight: bold;">Perpustakaan Universitas Dian Nuswantoro</h2></center>
  <table style="margin-top: 50px; margin-left: 180px; width: 90%;" class="table">
    <thead>
      <tr>
          <th>Nomor Id</th>
          <th>Judul Buku</th>
          <th>Pengarang</th>
          <th>Jumlah Halaman</th>
          <th>Stok</th>
          <th>Keterangan</th>
      </tr>
    </thead>
  <tbody>
    <?php 
    while ($hasil=mysqli_fetch_array($sql)){
              $nomor_id=$hasil["nomor_id"];
              $judul_buku=$hasil["judul_buku"];
              $pengarang=$hasil["pengarang"];
              $jumlah_halaman=$hasil["jumlah_halaman"];
              $stok=$hasil["stok"];
              echo "<tr class='table-primary'>
                  <td>$nomor_id</td>
                  <td>$judul_buku</td>
                  <td>$pengarang</td>
                  <td>$jumlah_halaman</td>
                  <td>$stok</td>
                  <td><a href='update_fromku.php?id=$nomor_id'><button type='button' class='btn btn-success'>Edit</button></a>
                  <a href='hapus_form.php?id=$nomor_id' onClick='return tanya()'><button type='button' class='btn btn-danger'>Hapus</button></a></td>
                  </tr>";
    }
    ?>
  </tbody>
  </table>
  <div class="edit">
    <a href="form_.php"<button type="button" class="btn btn-primary">Tambah Data</button></a>
  </div>
  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="dist/js/pages/dashboard3.js"></script>
</body>
</html>