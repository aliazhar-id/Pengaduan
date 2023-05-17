<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Halaman Masyarakat</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

<div class="card-body">
  <div class="card_header">
    <h3>Lihat Tanggapan</h3>
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
    <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
      
      <?php
      include 'rifki_koneksi.php';
      $sql=mysqli_query($koneksi, "SELECT * FROM rifki_pengaduan, rifki_tanggapanptgs where rifki_tanggapanptgs.rifki_id_pengaduan='$_GET[id]' and rifki_tanggapanptgs.rifki_id_pengaduan=rifki_pengaduanptgs.rifki_id_pengaduan");
      $cek=mysqli_num_rows($sql);
      if ($cek<1){
      echo "<font color='red'>Mohon bersabar, pengaduan anda belum ditanggapi</font>";
    }else{

      if ($data=mysqli_fetch_array($sql))
      
      {
        ?>
  
      <div class="form-group cols-sm-6">
        <label>Tanggal Tanggapan</label><br>
        <input type="text" name="rifki_tgl" value="<?php echo $data['rifki_tgl']; ?>" class="form-control" readonly>
      </div>

      <div class="form-group cols-sm-6">
        <label>Tulis Laporan Pengaduan</label>
        <textarea class="form-control" rows="7" name="rifki_isi_laporan" readonly="">
          <?php echo $data['rifki_isi_laporan']; ?>
        </textarea>
      </div>

      <div class="form-group cols-sm-6">
        <label>Isi Tanggapan</label>
        <textarea class="form-control" rows="7" name="rifki_tanggapanptgs" readonly="">
          <?php echo $data['rifki_tanggapanptgs']; ?>
        </textarea>
      </div>
       

      
      <?php } } ?>



<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

</body>

</html>