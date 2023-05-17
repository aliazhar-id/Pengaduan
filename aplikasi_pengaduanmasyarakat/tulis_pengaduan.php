<!DOCTYPE html>
<html lang="en">


<?php
session_start();
include 'rifki_koneksi.php';
if(isset($_POST["rifki_submit"])){

  $pengaduan = mysqli_query($koneksi, "SELECT * FROM rifki_pengaduan where rifki_nik ='rifki_nik'");

  if (mysqli_num_rows($pengaduan)>0) {
    

    $data = mysqli_fetch_array($pengaduan);
    $_SESSION['rifki_nama'] = $data['rifki_nama'];
    $_SESSION['rifki_nik'] = $data['rifki_nik'];
    $_SESSION['rifki_foto'] = $data['rifki_foto'];

  }else{

    
  }
}
?>

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
    <h3>Tulis Pengaduan</h3>
  </div>
  <div class="card-body">
    <form action="rifki_simpanpengaduan.php" name="formpengaduan" method="post" class="form-horizontal" enctype="multipart/form-data" onsubmit="return validateForm()">



      <div class="form-group cols-sm-6">
        <label>Tanggal Pengaduan</label><br>
        <input type="text" name="rifki_tgl_pengaduan" value="<?php echo date('d/m/Y'); ?>" class="form-control" readonly>
      </div>

      <div class="form-group cols-sm-6">
        <label>NIK</label><br>
        <input type="text" name="rifki_nik" value="<?php echo $_SESSION['rifki_nik']; ?>" class="form-control" readonly>
      </div>

      <div class="form-group cols-sm-6">
        <label>Petugas Dinas</label><br>
        <select class="form-control" name="rifki_petugasdinas">
          <option>===Pilih===</option>
          <option>Dinas Sosial</option>
          <option>Dinas Perhubungan</option>
          <option>Dinas Kebersihan</option>
          <option>Dinas Perlindungan Anak</option>
          <option>Dinas Perhutanan</option>
        </select>
      </div>

      <div class="form-group cols-sm-6">
        <label>Daerah</label><br>
        <select class="form-control" name="rifki_daerah">
          <option>===Pilih===</option>
          <option>Cimahi Utara</option>
          <option>Cimahi Tengah</option>
          <option>Cimahi Selatan</option>
        </select>
      </div>

       <div class="form-group cols-sm-6">
        <label>Tulis Laporan Pengaduan</label>
        <textarea class="form-control" rows="7" name="rifki_isi_laporan"></textarea>
      </div>

       <div class="form-group cols-sm-6">
        <label>Unggah Foto</label>
        <input type="file" name="rifki_foto" class="form-control" accept=".jpg, .jpeg, .png, .gif"><font color="red">
          *tipe yang bisa diupload adalah : .jpg, .jpeg, .png, .gif
        </font>
      </div>

      <div class="form-group cols-sm-6">
        <input type="submit" value="simpan" name="rifki_submit" class="btn btn-primary">
        <input type="reset" value="kosongkan" class="btn btn-warning">
      </div>

       <script>
        function validateForm() {
            if (document.forms["formpengaduan"]["rifki_petugasdinas"].value == "") {
                alert("Petugas Dinas Tidak Boleh Kosong");
                document.forms["formpengaduan"]["rifki_petugasdinas"].focus();
                return false;
            }    

            if (document.forms["formpengaduan"]["rifki_isi_laporan"].value == "") {
                alert("Isi Laporan Tidak Boleh Kosong");
                document.forms["formpengaduan"]["rifki_isi_laporan"].focus();
                return false;
            }

             if (document.forms["formpengaduan"]["rifki_foto"].value == "") {
                alert("Foto Tidak Boleh Kosong");
                document.forms["formpengaduan"]["rifki_foto"].focus();
                return false;
            }
           
        }
    </script>



<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

</body>

</html>

