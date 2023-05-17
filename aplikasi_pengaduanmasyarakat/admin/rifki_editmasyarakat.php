<!DOCTYPE html>
<html lang="en">

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
    <h3>Edit Data Masyarakat</h3>
  </div>
  <div class="card-body">

    <?php
    include '../rifki_koneksi.php';
    $nik=$_GET['nik'];
    $sql = mysqli_query($koneksi, "SELECT * FROM rifki_masyarakat WHERE rifki_nik='$nik'");
    if($data=mysqli_fetch_array($sql)){

  ?>
    <form action="rifki_updatemasyarakat.php" method="post" class="form-horizontal">
       <div class="form-group cols-sm-6">
        <label>NIK</label><br>
        <input type="text" name="rifki_nik" value="<?php echo $data['rifki_nik'] ?>" class="form-control" readonly>
      </div>

      <div class="form-group cols-sm-6">
        <label>Nama Masyarakat</label><br>
        <input type="text" name="rifki_nama" value="<?php echo $data['rifki_nama']; ?>" class="form-control">
      </div>

      <div class="form-group cols-sm-6">
        <label>Username</label><br>
        <input type="text" name="rifki_username" value="<?php echo $data['rifki_username']; ?>" class="form-control">
      </div>

      <div class="form-group cols-sm-6">
        <label>Password</label><br>
        <input type="text" name="rifki_password" value="<?php echo $data['rifki_password']; ?>" class="form-control">
      </div>

      <div class="form-group cols-sm-6">
        <label>Telp</label><br>
        <input type="text" name="rifki_telp" value="<?php echo $data['rifki_telp']; ?>" class="form-control">
      </div>
      
      <div class="form-group cols-sm-6">
        <input type="submit" value="Edit Data" name="rifki_simpan" class="btn btn-primary">
        <input type="reset" value="kosongkan" class="btn btn-warning">
      </div>
    </form>

    <?php } ?>



<!-- Bootstrap core JavaScript-->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../js/sb-admin-2.min.js"></script>

</body>

</html>

