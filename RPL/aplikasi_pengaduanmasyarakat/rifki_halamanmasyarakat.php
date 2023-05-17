<?php
if (isset($_GET['url'])) {
	$url=$_GET['url'];

	switch ($url) {
		case 'tulis_pengaduan';
		include 'tulis_pengaduan.php';
		break;
		
		case 'lihat_pengaduan';
		include 'lihat_pengaduan.php';
		break;

		case 'detail_pengaduan';
		include 'detail_pengaduan.php';
		break;

		case 'lihat_tanggapan';
		include 'lihat_tanggapan.php';
		break;

		case 'lihat_tanggapanptgs';
		include 'lihat_tanggapanptgs.php';
		break;
		
	}
}else {
	?>
	<h5>Selamat Datang di Aplikasi Pelaporan Pengaduan Masyarakat yang dibuat untuk melaporkan pelanggaran
	atau penyimpangan kejadian-kejadian yang ada pada masyarakat.<br><br>
	Anda Login Sebagai : </h5><h2><b> <?php session_start(); echo $_SESSION["rifki_nama"];
	
include 'rifki_koneksi.php';
	$sql = mysqli_query($koneksi, "SELECT * FROM rifki_pengaduan where rifki_status='selesai'");
	if ($cek=mysqli_num_rows($sql)) {
	
	?>

	<!-- Illustrations -->
			<br>
			<br>
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Tentang Aplikasi Pengaduan Masyarakat</h6>
                </div>
                <div class="card-body">
                  <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/undraw_posting_photo.svg" alt="">
                  </div>
                  <p align="center">Standar Pelayanan Pengaduan Masyarakat</p>
                  <br>
                  <h4>A. Latar Belakang</h4>
                  <h5 align="justify">Pengaduan masyarakat harus disikapi sebagai salah satu bentuk partisipasi pengawasan masyarakat(Wasmas) yang efektifdalam rangka ikutserta mewujudkan penyelenggaraan pemerintahan yang ber-kinerja baik serta bebas dari praktek KKN demi terwujudnya Good Governance yang menjadi cita-cita reformasi. Pengaduan masyarakat yang mengandung kebenaran dapat dipergunakan sebagai bahan masukan untuk peningkatan kapasitas aparatur negara dalam melaksanakan tugas-tugas umum pemerintahan terutama dalam memberikan pelayanan kepada masyarakat. Oleh karena itu,setiap pengaduan yang masuk perlu ditanggapi dengan baik secara professional dan proporsional. Adanya suatu standar pelayanan diharapkan akan lebih menjamin terlaksananya penanganan terhadap pengaduan masyarakat secara efektif, efisien, tepat waktu,tepat sasaran,serta tuntasdan dapat dipertanggungjawabkan.</h5>
                  <br>
                  <h3>B. Maksud dan Tujuan</h3>
                  <h5 align="justify">Maksud dari penetapan standar pelayanan penanganan pengaduan masyarakat di lingkungan Inspektorat Jenderal Kementerian Komunikasi dan Informatika ini adalah untuk menyediakan informasi dan panduan yang jelas baik bagi pelaksana pelayanan maupun pengguna pelayanan mengenai penanganan pengaduan masyarakat di lingkungan Kementerian Komunikasi dan Informatika. Sedangkan tujuannya adalah untuk memperlancar proses penanganan terhadap pengaduan masyarakat yang masuk sesuai dengan proporsinya sehingga akan lebih menjamin tingkat kepuasan masyarakat yang dilayani.</h5>
                  <br>
                  <h3>C. Dasar Hukum</h3>
                  <h5 align="justify">Peraturan Menteri Komunikasi dan Informatika Nomor 06/PER/M.KOMINFO/08/2018 tentang Organisasi dan Tata Kerja Kementerian Komunikasi dan Informatika, Keputusan Menteri Komunikasi dan Informatika Nomor 555 Tahun 2013 tentang Pelayanan Publik di Lingkungan Kementerian Komunikasi dan Informatika, Instruksi Menteri Komunikasi dan Informatika Nomor 2 Tahun 2013 tentang Penyusunan Standar Pelayanan dan Maklumat Pelayanan,sertaPengelolaanPengaduan, Sarana, Prasarana, dan/atau Fasilitas Pelayanan Publik di Lingkungan Kementerian Komunikasi dan Informatika, Pedoman Menteri Komunikasi dan Informatika Nomor 6 Tahun 2018 Tentang Pedoman Pengelolaan Pengaduan Masyarakat dan Pelaporan Pelanggaran (Whistleblowing System) di Lingkungan Kementerian Komunikasi dan Informatika.</h5>
                  <br>
                  <h3>D. Ruang Lingkup</h3>
                  <h5 align="justify">Unit pelayanan yang melaksanakan penanganan pengaduan masyarakat terkait penyalahgunaan wewenang atau penyimpangan oleh pegawai di lingkungan Kementerian Komunikasi dan Informatika adalah Inspektorat Jenderal, Pelaksana pelayanan adalah seluruh pejabat struktural dan fungsional serta pegawai di lingkungan Inspektorat Jenderal yang secara teknis dan administratif yang diberi tugas dan tanggung jawab menangani pengaduan masyarakat, Penanggungjawab pelayanan adalah masing-masing Inspektur terkait dengan materi Pengaduan Masyarakat, Sasaran yang hendak dicapai adalah tertanganinya pengaduan masyarakat secara cepat, tepat dan tuntas serta dapat dipertanggungjawabkan sesuai dengan ketentuan peraturan perundang-undanganyang berlaku, Keluaran (output) pelayanan adalah naskah dinas terkait tindaklanjut penyelesaian pengaduan masyarakat.
</h5>
                 
                </div>
              </div>

	
<?php
}	}
?>