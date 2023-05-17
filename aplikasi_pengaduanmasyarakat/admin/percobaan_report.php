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
        <a class="nav-link" href="rifki_admin.php?url=rifki_verifikasi">
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
            <a class="collapse-item" href="rifki_admin.php?url=rifki_lihatpetugas">Data Petugas</a>
            <a class="collapse-item" href="rifki_admin.php?url=rifki_lihatmasyarakat">Data Masyarakat</a>
            <a class="collapse-item" href="rifki_admin.php?url=rifki_lihatpengaduan">Data Pengaduan</a>
            <a class="collapse-item" href="rifki_admin.php?url=rifki_lihattanggapan">Data Tanggapan Admin</a>
            <a class="collapse-item" href="rifki_admin.php?url=rifki_lihattanggapanptgs">Data Tanggapan Petugas</a>
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
            <a class="collapse-item" href="rifki_admin.php?url=report_petugas">Laporan Petugas</a>
            <a class="collapse-item" href="rifki_admin.php?url=report_masyarakat">Laporan Masyarakat</a>
            <a class="collapse-item" href="percobaan_report.php">Laporan Pengaduan</a>
            <a class="collapse-item" href="rifki_report_tanggapan.php">Lap. Tanggapan admin</a>
            <a class="collapse-item" href="rifki_reporttanggapanptgs.php">Lap. Tanggapan Petugas</a>
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
            <option value="4">Petugas Dinas</option>
            <option value="5">Daerah</option>
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

        <div id="form-petugas">
          <label>Petugas Dinas</label>
          <select name="petugas_dinas" class="form-control">
            <option value="">Pilih</option>
                <option value="Dinas Sosial">Dinas Sosial</option>
                <option value="Dinas Perhubungan">Dinas Perhubungan</option>
                <option value="Dinas Kebersihan">Dinas Kebersihan</option>
                <option value="Dinas Perlindungan Anak">Dinas Perlindungan Anak</option>
                <option value="Dinas Perhutanan">Dinas Perhutanan</option>
          </select>
          <br /><br />
        </div>

        <div id="form-daerah">
          <label>Daerah</label>
          <select name="daerah" class="form-control">
            <option value="">Pilih</option>
                <option value="Cimahi Utara">Cimahi Utara</option>
                <option value="Cimahi Tengah">Cimahi Tengah</option>
                <option value="Cimahi Selatan">Cimahi Selatan</option>

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

            echo '<b>Data Pengaduan Tanggal '.$tgl.'</b><br /><br />';
            echo '<a href="rifki_printpengaduan.php?filter=1&tanggal='.$_GET['tanggal'].'" class="btn mb-1 btn-rounded btn-outline-info">Cetak PDF</a><br /><br />';

            $query = "SELECT * FROM rifki_pengaduan WHERE DATE(rifki_tgl_pengaduan)='".$_GET['tanggal']."'"; // Tampilkan data transaksi sesuai tanggal yang diinput oleh user pada filter
        }else if($filter == '2'){ // Jika filter nya 2 (per bulan)
            $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

            echo '<b>Data Pengaduan Bulan '.$nama_bulan[$_GET['bulan']].' '.$_GET['tahun'].'</b><br /><br />';
            echo '<a href="rifki_printpengaduan.php?filter=2&bulan='.$_GET['bulan'].'&tahun='.$_GET['tahun'].'" class="btn mb-1 btn-rounded btn-outline-info">Cetak PDF</a><br /><br />';

            $query = "SELECT * FROM rifki_pengaduan WHERE MONTH(rifki_tgl_pengaduan)='".$_GET['bulan']."' AND YEAR(rifki_tgl_pengaduan)='".$_GET['tahun']."'"; // Tampilkan data transaksi sesuai bulan dan tahun yang diinput oleh user pada filter
        }else if($filter == '3'){ // Jika filter nya 3 (per tahun)
            echo '<b>Data Pengaduan Tahun '.$_GET['tahun'].'</b><br /><br />';
            echo '<a href="rifki_printpengaduan.php?filter=3&tahun='.$_GET['tahun'].'" class="btn mb-1 btn-rounded btn-outline-info">Cetak PDF</a><br /><br />';

            $query = "SELECT * FROM rifki_pengaduan WHERE YEAR(rifki_tgl_pengaduan)='".$_GET['tahun']."'"; // Tampilkan data transaksi sesuai tahun yang diinput oleh user pada filter
        
        }else if($filter == '4'){
          echo '<b>Data Pengaduan Petugas '.$_GET['petugas_dinas'].'</b><br /><br />';
          echo '<a href="rifki_printpengaduan.php?filter=4&petugas_dinas='.$_GET['petugas_dinas'].'" class="btn mb-1 btn-rounded btn-outline-info">Cetak PDF</a><br /><br />';

          $query = "SELECT * FROM rifki_pengaduan WHERE rifki_petugasdinas='".$_GET['petugas_dinas']."'"; // Tampilkan data transaksi sesuai petugas yang diinput oleh user pada filter
        }else{
          echo '<b>Data Pengaduan Daerah '.$_GET['daerah'].'</b><br /><br />';
          echo '<a href="rifki_printpengaduan.php?filter=5&daerah='.$_GET['daerah'].'" class="btn mb-1 btn-rounded btn-outline-info">Cetak PDF</a><br /><br />';

          $query = "SELECT * FROM rifki_pengaduan WHERE rifki_daerah='".$_GET['daerah']."'"; // Tampilkan data transaksi sesuai petugas yang diinput oleh user pada filter
        }
    }else{ // Jika user tidak mengklik tombol tampilkan
        echo '<b>Semua Data Pengaduan</b><br /><br />';
        echo '<a href="rifki_printpengaduan.php" class="btn mb-1 btn-rounded btn-outline-info">Cetak PDF</a><br /><br />';

        $query = "SELECT * FROM rifki_pengaduan ORDER BY rifki_tgl_pengaduan"; // Tampilkan semua data transaksi diurutkan berdasarkan tanggal
    }

    ?>
                                

    <table border='1' cellspacing="0" cellpadding='5' class="table table-bordered table-basic ">
      <img src="../img/logo_cimahi.png" width="100px" border="5" align="left">
      <h3 class="m-0 font-weight-bold text-secondary" align="center">Sistem Informasi Pengaduan Masyarakat</h3>
              <h4 class="m-0 font-weight-bold text-secondary" align="center">Kota Cimahi</h4>
              <h5 class="m-0 font-weight-bold text-secondary" align="center">Jl.Kalidam No.6 Rt.01 / Rw.09 Kel. Karangmekar Kec. Cimahi Tengah kode Pos 04523 Kota Cimahi Jawa Barat, Indonesia.</h5>
              <br><br><hr>
              <h4 class="m-0 font-weight-bold text-secondary" align="center">Laporan Pengaduan</h4>
              <br>
    <tr>
        <th>No</th>
        <th>Tanggal Pengaduan</th>
        <th>Petugas Dinas</th>
        <th>Daerah</th>
        <th>Isi Laporan</th>
        <th>Status</th>
    </tr>

    <?php
    $no_urut = 0;
    $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
    $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql

    if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
        while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
            $tgl = date('d-m-Y', strtotime($data['rifki_tgl_pengaduan'])); // Ubah format tanggal jadi dd-mm-yyyy
            $no_urut++;

            echo "<tr>";
            echo "<td>".$no_urut."</td>";
            echo "<td>".$tgl."</td>";
            echo "<td>".$data['rifki_petugasdinas']."</td>";
            echo "<td>".$data['rifki_daerah']."</td>";
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

        <h5 class="m-0 font-weight-bold text-primary" align="right">Cimahi, <?php echo date('d m Y'); ?></h5>
                <h5 class="m-0 font-weight-bold text-primary" align="right">Petugas, </h5>
                <br><br><br><br>
                <h5 class="m-0 font-weight-bold text-primary" align="right">admin</h5>

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

        $('#form-tanggal, #form-bulan, #form-tahun, #form-petugas, #form-daerah').hide(); // Sebagai default kita sembunyikan form filter tanggal, bulan & tahunnya

        $('#filter').change(function(){ // Ketika user memilih filter
            if($(this).val() == '1'){ // Jika filter nya 1 (per tanggal)
                $('#form-bulan, #form-tahun, #form-petugas, #form-daerah').hide(); // Sembunyikan form bulan dan tahun
                $('#form-tanggal').show(); // Tampilkan form tanggal
            }else if($(this).val() == '2'){ // Jika filter nya 2 (per bulan)
                $('#form-tanggal, #form-petugas, #form-daerah').hide(); // Sembunyikan form tanggal
                $('#form-bulan, #form-tahun').show(); // Tampilkan form bulan dan tahun
            }else if($(this).val() == '3'){ // Jika filternya 3 (per tahun)
                $('#form-tanggal, #form-bulan').hide(); // Sembunyikan form tanggal dan bulan
                $('#form-tahun').show(); // Tampilkan form tahun
            }else if($(this).val() == '4'){
                $('#form-tanggal, #form-bulan, #form-tahun, #form-daerah').hide();
                $('#form-petugas').show();
            }else{
                $('#form-tanggal, #form-bulan, #form-tahun, #form-tahun').hide();
                $('#form-daerah').show();
            }
            $('#form-tanggal input, #form-bulan select, #form-tahun select, #form-petugas select, #form-daerah select').val(''); // Clear data pada textbox tanggal, combobox bulan & tahun
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
