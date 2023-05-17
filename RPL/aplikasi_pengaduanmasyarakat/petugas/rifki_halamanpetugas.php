<?php
include '../rifki_koneksi.php';
$data_belum = mysqli_query($koneksi, "SELECT * FROM rifki_pengaduan WHERE rifki_status='Belum'");
$jumlah_belum = mysqli_num_rows($data_belum);
$data_proses = mysqli_query($koneksi, "SELECT * FROM rifki_pengaduan WHERE rifki_status='proses'");
$jumlah_proses = mysqli_num_rows($data_proses);
$data_selesai = mysqli_query($koneksi, "SELECT * FROM rifki_pengaduan WHERE rifki_status='selesai'");
$jumlah_selesai = mysqli_num_rows($data_selesai);
$jumlah_data = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM rifki_pengaduan"));
if(empty($jumlah_data)){
    error_reporting(0);
  }
?>
<?php
if (isset($_GET['url'])) {
	$url=$_GET['url'];

	switch ($url) {
		case 'rifki_verifikasi';
		include 'rifki_verifikasi.php';
		break;

		case 'rifki_detailverifikasi';
		include 'rifki_detailverifikasi.php';
		break;

		case 'tanggapan_pengaduan';
		include 'tanggapan_pengaduan.php';
		break;

    case 'tanggapan_pengaduan';
    include 'tanggapan_pengaduan.php';
    break;
		
    case 'rifki_tanggapan';
    include 'rifki_tanggapan.php';
    break;

	}
}else {
	?>
	<h5>Selamat Datang di Aplikasi Pelaporan Pengaduan Masyarakat yang dibuat untuk melaporkan pelanggaran
	atau penyimpangan kejadian-kejadian yang ada pada masyarakat<br><br>
	Anda Login Sebagai : </h5><h2><b> <?php session_start(); echo $_SESSION["rifki_nama_petugas"]; 

	include '../rifki_koneksi.php';
	$sql = mysqli_query($koneksi, "SELECT * FROM rifki_pengaduan where rifki_status='Belum'");
	if ($cek=mysqli_num_rows($sql)) {
	
	?>
	<br>
	<br>
  <div class="row">
	<div class="col-xl-5 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-30 py-5">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Laporan Pengaduan :</div>
                      <div class="h3 mb-0 font-weight-bold text-gray-800">Ada <?php echo $cek; ?> Laporan dari Masyarakat </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comment fa-4x text-gray-300"></i>
                      <span class="badge badge-danger badge-counter"><?php echo $cek; ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

               <?php
                $persen = 100;
                $persenbelum = $jumlah_belum / $jumlah_data * $persen;
                $persenproses = $jumlah_proses / $jumlah_data * $persen;
                $persenselesai = $jumlah_selesai / $jumlah_data * $persen;
                ?>

        <div class="card shadow mb-4">
                <div class="card-header py-1">
                  <h6 class="m-0 font-weight-bold text-primary">Persentase Pengaduan</h6>
                </div>
                <div class="card-body">
                  <h4 class="small font-weight-bold">Status Belum Ditanggapi<span class="float-right"><?= $persenbelum."%";?></span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar animated--grow-in bg-danger" role="progressbar" style="width: <?= $persenbelum."%";?>" aria-valuenow="<?= $persenbelum."%";?>" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Status Proses Ditanggapi<span class="float-right"><?= $persenproses."%";?></span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar animated--grow-in bg-warning" role="progressbar" style="width: <?= $persenproses."%";?>" aria-valuenow="<?= $persenproses."%";?>" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Status Selesai Ditanggapi<span class="float-right"><?= $persenselesai."%";?></span></h4>
                  <div class="progress">
                    <div class="progress-bar bg-success animated--grow-in bg-success" role="progressbar" style="width: <?= $persenselesai."%";?>" aria-valuenow="<?= $persenselesai."%";?>" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>   
            </div>
            
          
    <br>
    <div class="row">
    <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-30 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Status Data "Belum Ditanggapi"</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_belum; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-30 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Status Data "Proses Ditanggapi"</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_proses; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-success shadow h-30 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Status Data "Selesai Ditanggapi"</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_selesai; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
  <?php
} }
?>
     