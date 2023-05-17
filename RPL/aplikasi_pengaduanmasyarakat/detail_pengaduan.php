<!DOCTYPE html>
<html lang="en">
<?php

include 'rifki_koneksi.php';


  $sql = mysqli_query($koneksi, "SELECT * FROM rifki_pengaduan where rifki_id_pengaduan ='$_GET[id]'");
  $data = mysqli_fetch_array($sql);
  if ($sql){

  }
  ?>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">


<div class="card-body">
  <div class="card_header">
    <h3>Detail Pengaduan</h3>
  </div>
  <div class="card-body">
  <div class="form-group cols-sm-6">
  <a href="?url=lihat_pengaduan" class="btn btn-primary btn-icon-split">
    <span class="icon text-white-50">
      <i class="fas fa-arrow-left"></i>
    </span>
    <span class="text">Kembali</span>
  </a>
  
  <div class="card-body">
    <form action="rifki_simpanpengaduan.php" method="post" class="form-horizontal" enctype="multipart/form-data">
      <div class="form-group cols-sm-6">
        <label>Tanggal Pengaduan</label><br>
        <input type="text" name="rifki_tgl_pengaduan" value="<?php echo $data['rifki_tgl_pengaduan']; ?>" class="form-control" readonly>
      </div>
      <div class="form-group cols-sm-6">
        <label>NIK</label><br>
        <input type="text" value="<?php echo $data['rifki_nik']; ?>" class="form-control" readonly>
      </div>
       <div class="form-group cols-sm-6">
        <label>Isi Laporan Pengaduan</label>
        <textarea class="form-control" rows="7"><?php echo $data['rifki_isi_laporan']; ?>
        </textarea>
      </div>
       <div class="form-group cols-sm-6">
        <label>Bukti Foto</label>
        <br>
        <img src="foto/<?php echo $data['rifki_foto']; ?>" style="width: 800px">
      </div>

 <?php  ?>

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

</body>

</html>
