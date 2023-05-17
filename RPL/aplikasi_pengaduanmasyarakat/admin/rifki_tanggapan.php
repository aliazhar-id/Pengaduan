<!DOCTYPE html>
<html lang="en">

<?php

include '../rifki_koneksi.php';
$carikode = mysqli_query ($koneksi, "SELECT rifki_id_tanggapan FROM rifki_tanggapan") or die(mysqli_error($koneksi));
$datakode = mysqli_fetch_array($carikode);
$jumlah_data = mysqli_num_rows($carikode);
if ($datakode) {
  $nilaikode = substr($jumlah_data[0], 2);
  $kode = (int) $nilaikode;
  $kode = $jumlah_data + 1;
  $kode_otomatis = "0".str_pad($kode, 2, "0", STR_PAD_LEFT);
}else{
  $kode_otomatis = "001";
}
?>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Halaman Admin</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">


<div class="card-body">
  <div class="card_header">
    <h3>Tanggapan Pengaduan</h3>
  </div>
  <div class="card-body">
  <div class="form-group cols-sm-6">
  <a href="?url=rifki_verifikasi" class="btn btn-primary btn-icon-split">
    <span class="icon text-white-50">
      <i class="fas fa-arrow-left"></i>
    </span>
    <span class="text">Kembali</span>
  </a>

   
  <div class="card-body">
    <form action="rifki_simpantanggapan.php" method="post" class="form-horizontal" enctype="multipart/form-data">

       <div class="form-group cols-sm-6">
        <label>ID Tanggapan</label><br>
        <input type="text" name="rifki_id_tanggapan" value="<?php echo $kode_otomatis; ?>" class="form-control" readonly>
      </div>

      <div class="form-group cols-sm-6">
        <label>ID Pengaduan</label><br>
        <input type="text" name="rifki_id_pengaduan" value="<?php echo $_GET['id']; ?>" class="form-control" readonly>
      </div>

      <div class="form-group cols-sm-6">
        <label>Tanggal Tanggapan</label><br>
        <input type="text" name="rifki_tgl_pengaduan" value="<?php echo date('d-m-Y') ?>" class="form-control" readonly>
      </div>

      <div class="form-group cols-sm-6">
        <label>Isi Tanggapan</label>
        <textarea class="form-control" rows="7" name="rifki_tanggapan">
        </textarea>
      </div>

      <div class="form-group cols-sm-6">
        <label>ID Petugas</label>
        <input class="form-control" type="text" name="rifki_id_petugas" value="<?php echo $_SESSION['rifki_id_petugas']; ?>" readonly>
      </div>

      <input type="submit" class="btn btn-primary btn-user" value="Tanggapi!">

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/demo/chart-area-demo.js"></script>
  <script src="../js/demo/chart-pie-demo.js"></script>

</body>

</html>
