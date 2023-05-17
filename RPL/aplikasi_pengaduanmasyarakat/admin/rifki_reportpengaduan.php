<?php
// Load file koneksi.php
include "../rifki_koneksi.php";
?>

<html>
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
   <link rel="stylesheet" href="../plugin/jquery-ui/jquery-ui.min.css" /> <!-- Load file css jquery-ui -->
    <script src="../js/jquery.min.js"></script> <!-- Load file jquery -->

</head>

<body id="page-top">

 <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../rifki_admin.php">
        <img src="../img/admin.png" width="60px">
        <div class="sidebar-brand-text mx-3">Pengaduan Masyarakat</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="../admin/rifki_admin.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Halaman Utama Admin</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="?url=rifki_verifikasi">
          <i class="fas fa-check"></i>
          <span>Verifikasi dan Validasi</span></a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-file-alt"></i>
          <span>Mengelola Data</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Data - Data :</h6>
            <a class="collapse-item" href="?url=rifki_lihatpetugas">Data Petugas</a>
            <a class="collapse-item" href="?url=rifki_lihatmasyarakat">Data Masyarakat</a>
            <a class="collapse-item" href="?url=rifki_lihatpengaduan">Data Pengaduan</a>
            <a class="collapse-item" href="?url=rifki_lihattanggapan">Data Tanggapan</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          <i class="fas fa-fw fa-cog"></i>
          <span>Mengelola Laporan</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Data Laporan :</h6>
            <a class="collapse-item" href="?url=report_petugas">Laporan Petugas</a>
            <a class="collapse-item" href="?url=report_masyarakat">Laporan Masyarakat</a>
            <a class="collapse-item" href="?url=rifki_reportpengaduan">Laporan Pengaduan</a>
            <a class="collapse-item" href="?url=report_tanggapan">Laporan Tanggapan</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
          <i class="fas fa-fw fa-cog"></i>
          <span>Laporan Dinas</span>
        </a>
        <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Data Laporan :</h6>
            <a class="collapse-item" href="?url=report_sosial">Dinas Sosial</a>
            <a class="collapse-item" href="?url=report_perhubungan">Dinas Perhubungan</a>
            <a class="collapse-item" href="?url=report_kebersihan">Dinas Kebersihan</a>
            <a class="collapse-item" href="?url=report_perlanak">Dinas Perlindungan Anak</a>
            <a class="collapse-item" href="?url=report_perhutanan">Dinas Perhutanan</a>
          </div>
        </div>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <li class="nav-item">
        <a class="nav-link" href="../rifki_logout2.php">
          <i class="fas fa-sign-out-alt"></i>
          <span>Keluar</span></a>
      </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>

    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <h1>Sistem Informasi Pelaporan Pengaduan Masyarakat</h1>
          

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <form method="get" action="">
        <label>Filter Berdasarkan</label><br>
        <select name="filter" id="filter" class="form-control">
            <option value="">Pilih</option>
            <option value="1">Per Tanggal</option>
            <option value="2">Per Bulan</option>
            <option value="3">Per Tahun</option>
        </select>
        <br /><br />

        <div id="form-tanggal">
            <label>Tanggal</label><br>
            <input type="text" name="tanggal" class="input-tanggal form-control" />
            <br /><br />
        </div>

        <div id="form-bulan">
            <label>Bulan</label><br>
            <select name="bulan" class="form-control">
                <option value="">Pilih</option>
                <option value="1">Januari</option>
                <option value="2">Februari</option>
                <option value="3">Maret</option>
                <option value="4">April</option>
                <option value="5">Mei</option>
                <option value="6">Juni</option>
                <option value="7">Juli</option>
                <option value="8">Agustus</option>
                <option value="9">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
            </select>
            <br /><br />
        </div>

        <div id="form-tahun">
            <label>Tahun</label><br>
            <select name="tahun" class="form-control">
                <option value="">Pilih</option>
                <?php
                $query = "SELECT YEAR(rifki_tgl_pengaduan) AS tahun FROM rifki_pengaduan GROUP BY YEAR(rifki_tgl_pengaduan)"; // Tampilkan tahun sesuai di tabel transaksi
                $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query

                while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                    echo '<option value="'.$data['tahun'].'">'.$data['tahun'].'</option>';
                }
                ?>
            </select>
            <br /><br />
        </div>

        

        <button type="submit" class="btn mb-1 btn-primary">Tampilkan</button>
        <a href="percobaan_report.php" class="btn mb-1 btn-rounded btn-outline-success">Reset Filter</a>
    </form>
    <hr />

    <?php
    if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
        $filter = $_GET['filter']; // Ambil data filder yang dipilih user

        if($filter == '1'){ // Jika filter nya 1 (per tanggal)
            $tgl = date('d-m-y', strtotime($_GET['tanggal']));

            echo '<b>Data Tanggapan Tanggal '.$tgl.'</b><br /><br />';
            echo '<a href="neni_print_tanggapan.php?filter=1&tanggal='.$_GET['tanggal'].'" class="btn mb-1 btn-rounded btn-outline-info">Cetak PDF</a><br /><br />';

            $query = "SELECT * FROM rifki_pengaduan WHERE DATE(rifki_tgl_pengaduan)='".$_GET['tanggal']."'"; // Tampilkan data transaksi sesuai tanggal yang diinput oleh user pada filter
        }else if($filter == '2'){ // Jika filter nya 2 (per bulan)
            $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

            echo '<b>Data Tanggapan Bulan '.$nama_bulan[$_GET['bulan']].' '.$_GET['tahun'].'</b><br /><br />';
            echo '<a href="neni_print_tanggapan.php?filter=2&bulan='.$_GET['bulan'].'&tahun='.$_GET['tahun'].'" class="btn mb-1 btn-rounded btn-outline-info">Cetak PDF</a><br /><br />';

            $query = "SELECT * FROM rifki_pengaduan WHERE MONTH(rifki_tgl_pengaduan)='".$_GET['bulan']."' AND YEAR(rifki_tgl_pengaduan)='".$_GET['tahun']."'"; // Tampilkan data transaksi sesuai bulan dan tahun yang diinput oleh user pada filter
        }else { // Jika filter nya 3 (per tahun)
            echo '<b>Data Pengaduan Tahun '.$_GET['tahun'].'</b><br /><br />';
            echo '<a href="neni_print_tanggapan.php?filter=3&tahun='.$_GET['tahun'].'" class="btn mb-1 btn-rounded btn-outline-info">Cetak PDF</a><br /><br />';

            $query = "SELECT * FROM rifki_pengaduan WHERE YEAR(rifki_tgl_pengaduan)='".$_GET['tahun']."'"; // Tampilkan data transaksi sesuai tahun yang diinput oleh user pada filter
        
            }
    }else{ // Jika user tidak mengklik tombol tampilkan
        echo '<b>Semua Data Tanggapan</b><br /><br />';
        echo '<a href="neni_print_tanggapan.php" class="btn mb-1 btn-rounded btn-outline-info">Cetak PDF</a><br /><br />';

        $query = "SELECT * FROM rifki_pengaduan ORDER BY rifki_tgl_pengaduan"; // Tampilkan semua data transaksi diurutkan berdasarkan tanggal
    }

    ?>
                                

    <table border='1' cellspacing="0" cellpadding='5' class="table table-bordered table-basic ">
    <tr>
        <th>Tanggal Pengaduan</th>
        <th>ID</th>
        <th>NIK</th>
        <th>Petugas Dinas</th>
        <th>Isi Laporan</th>
        <th>Status</th>
    </tr>

    <?php
    $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
    $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql

    if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
        while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
            $tgl = date('d-m-Y', strtotime($data['rifki_tgl_pengaduan'])); // Ubah format tanggal jadi dd-mm-yyyy

             echo "<tr>";
            echo "<td>".$tgl."</td>";
            echo "<td>".$data['rifki_id_pengaduan']."</td>";
            echo "<td>".$data['rifki_nik']."</td>";
            echo "<td>".$data['rifki_petugasdinas']."</td>";
            echo "<td>".$data['rifki_isi_laporan']."</td>";
            echo "<td>".$data['rifki_status']."</td>";
            echo "</tr>";
        }
    }else{ // Jika data tidak ada
        echo "<tr><td colspan='5'>Data tidak ada</td></tr>";
    }
    ?>
    </table>

           
        </div>

        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Ujikom Pengaduan Masyarakat 2021</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>


    
   

    <script>
    $(document).ready(function(){ // Ketika halaman selesai di load
        $('.input-tanggal').datepicker({
            dateFormat: 'yy-mm-dd' // Set format tanggalnya jadi yyyy-mm-dd
        });

        $('#form-tanggal, #form-bulan, #form-tahun').hide(); // Sebagai default kita sembunyikan form filter tanggal, bulan & tahunnya

        $('#filter').change(function(){ // Ketika user memilih filter
            if($(this).val() == '1'){ // Jika filter nya 1 (per tanggal)
                $('#form-bulan, #form-tahun').hide(); // Sembunyikan form bulan dan tahun
                $('#form-tanggal').show(); // Tampilkan form tanggal
            }else if($(this).val() == '2'){ // Jika filter nya 2 (per bulan)
                $('#form-tanggal').hide(); // Sembunyikan form tanggal
                $('#form-bulan, #form-tahun').show(); // Tampilkan form bulan dan tahun
            }else{ // Jika filternya 3 (per tahun)
                $('#form-tanggal, #form-bulan').hide(); // Sembunyikan form tanggal dan bulan
                $('#form-tahun').show(); // Tampilkan form tahun
            }
            $('#form-tanggal input, #form-bulan select, #form-tahun select').val(''); // Clear data pada textbox tanggal, combobox bulan & tahun
        })
    })
    </script>
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

    <script src="../plugin/jquery-ui/jquery-ui.min.js"></script> <!-- Load file plugin js jquery-ui -->



</body>
</html>
