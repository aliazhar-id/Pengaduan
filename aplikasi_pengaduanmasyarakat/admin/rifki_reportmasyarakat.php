<!DOCTYPE html>
<html lang="en">
<?php
session_start();
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



          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              
            </div>
            <div class="card-body">
              <img src="../img/logo_cimahi.png" width="100px" border="5" align="left">
              <h3 class="m-0 font-weight-bold text-secondary" align="center">Sistem Informasi Pengaduan Masyarakat</h3>
              <h4 class="m-0 font-weight-bold text-secondary" align="center">Kota Cimahi</h4>
              <h5 class="m-0 font-weight-bold text-secondary" align="center">Jl.Kalidam No.6 Rt.01 / Rw.09 Kel. Karangmekar Kec. Cimahi Tengah kode Pos 04523 Kota Cimahi Jawa Barat, Indonesia.</h6>
              <br><br><hr>
              <h4 class="m-0 font-weight-bold text-secondary" align="center">Laporan Masyarakat</h5>
              <br>

              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  
                    <tr>
                      <th>NIK</th>
                      <th>Nama Masyarakat</th>
                      <th>Username</th>
                      <th>password</th>
                      <th>Telp</th>
                    </tr>
                  
                  <?php
                  include '../rifki_koneksi.php';
                  $sql = mysqli_query($koneksi,"SELECT * FROM rifki_masyarakat");
                  while ($data=mysqli_fetch_array($sql)) {

                  
                  ?>
                  
                    <tr>
                       <td><?php echo $data['rifki_nik']?></td>
                      <td><?php echo $data['rifki_nama']?></td>
                      <td><?php echo $data['rifki_username']?></td>
                      <td><?php echo $data['rifki_password']?></td>
                      <td><?php echo $data['rifki_telp'] ?></td>
                      
                    </tr>
                    <?php
}
?>
                    
                  </table>
                </div>
                <br>
                <br>
                <h5 class="m-0 font-weight-bold text-primary" align="right">Cimahi, <?php echo date('d m Y'); ?></h5>
                <h5 class="m-0 font-weight-bold text-primary" align="right">Petugas, </h5>
                <br><br><br><br>
                <h5 class="m-0 font-weight-bold text-primary" align="right"><?php echo $_SESSION['rifki_nama_petugas']; ?></h5>
      

  

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>
