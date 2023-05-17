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
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">



          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Pengaduan</h6>
            </div>
            <div class="card-body">

              <form action="" method="post" align="left">
                <label>Filter</label>
                <input class="fa-search" type="text" name="cari" placeholder="Cari Status dan Daerah"> 
                <button class="btn-circle" type="submit" name="submit"><i class="fa fa-search"></i></button> 
        
                <a href="?url=rifki_lihatpengaduan" class="btn btn-primary">Refresh</a>
      
              </form><br>

              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Tgl</th>
                      <th>NIK</th>
                      <th>Dinas</th>
                      <th>Daerah</th>
                      <th>Isi Pengaduan</th>
                      <th>Foto</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <?php
                  include '../rifki_koneksi.php';
                  $batas = 10;
                  $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
                  $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;

                  $previous = $halaman - 1;
                  $next = $halaman + 1;

                  $data = mysqli_query($koneksi,"select * from rifki_petugas");
                  $jumlah_data = mysqli_num_rows($data);
                  $total_halaman = ceil($jumlah_data / $batas);
                  $no_urut = 0;
                  $cari = @$_POST['cari'];
                  $sql = mysqli_query($koneksi,"SELECT * FROM rifki_pengaduan WHERE rifki_status LIKE '%$cari%' OR rifki_daerah LIKE '%$cari%' limit $halaman_awal, $batas");
                  while ($data=mysqli_fetch_array($sql)) {
                    $no_urut++;
                  
                  ?>
                  <tbody>
                    <tr>
                      <td><?php echo $no_urut?></td>
                      <td><?php echo $data['rifki_tgl_pengaduan']?></td>
                      <td><?php echo $data['rifki_nik']?></td>
                      <td><?php echo $data['rifki_petugasdinas']?></td>
                      <td><?php echo $data['rifki_daerah']?></td>
                      <td><?php echo $data['rifki_isi_laporan']?></td>
                      <td><img src="../foto/<?php echo $data['rifki_foto']; ?>" style="width: 100px;"></td>
                      <td><?php echo $data['rifki_status']?></td>
                      <td>
      
                        <a href="rifki_deletepengaduan.php?id=<?php echo $data['rifki_id_pengaduan']; ?>" class="btn btn-danger btn-circle" onclick="return confirm('Yakin Mau Hapus Data?')">
                          <i class="fa fa-trash"></i>
                        </a>
                      </td>
                    </tr>
                    <?php
}
?>
                    </tbody>
                  </table>
                   <nav>
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" <?php if($halaman > 1){ echo "href='?url=rifki_lihatpengaduan&halaman=$previous'"; } ?>>Previous</a>
        </li>
        <?php 
        for($x=1;$x<=$total_halaman;$x++){
          ?> 
          <li class="page-item"><a class="page-link" href="?url=rifki_lihatpengaduan&halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
          <?php
        }
        ?>        
        <li class="page-item">
          <a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?url=rifki_lihatpengaduan&halaman=$next'"; } ?>>Next</a>
        </li>
      </ul>
    </nav>
                </div>
      

  

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
