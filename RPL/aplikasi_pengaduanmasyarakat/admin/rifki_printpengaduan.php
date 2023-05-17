<?php ob_start(); ?>
<html>
<head>
	<title>Cetak PDF</title>
	<style>
		table {
			border-collapse:collapse;
			table-layout:fixed;width: 630px;
		}
		table td {
			word-wrap:break-word;
			width: 20%;
		}
	</style>
</head>
<body>
	<?php
	// Load file koneksi.php
	

	if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter
		$filter = $_GET['filter']; // Ambil data filder yang dipilih user

		if($filter == '1'){ // Jika filter nya 1 (per tanggal)
			$tgl = date('d-m-y', strtotime($_GET['tanggal']));

			echo '<b>Data Pengaduan Tanggal '.$tgl.'</b><br /><br />';

			$query = "SELECT * FROM rifki_pengaduan WHERE DATE(rifki_tgl_pengaduan)='".$_GET['tanggal']."'"; // Tampilkan data pengaduan sesuai tanggal yang diinput oleh user pada filter
		}else if($filter == '2'){ // Jika filter nya 2 (per bulan)
			$nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

			echo '<b>Data Pengaduan Bulan '.$nama_bulan[$_GET['bulan']].' '.$_GET['tahun'].'</b><br /><br />';

			$query = "SELECT * FROM rifki_pengaduan WHERE MONTH(rifki_tgl_pengaduan)='".$_GET['bulan']."' AND YEAR(rifki_tgl_pengaduan)='".$_GET['tahun']."'"; // Tampilkan data pengaduan sesuai bulan dan tahun yang diinput oleh user pada filter
		}else if($filter == '3'){ // Jika filter nya 3 (per tahun)
			echo '<b>Data Pengaduan Tahun '.$_GET['tahun'].'</b><br /><br />';

			$query = "SELECT * FROM rifki_pengaduan WHERE YEAR(rifki_tgl_pengaduan)='".$_GET['tahun']."'"; // Tampilkan data pengaduan sesuai tahun yang diinput oleh user pada filter
		}else if($filter == '4'){ // Jika filter nya 4 (petugas Dinas)
			 echo '<b>Data Pengaduan Petugas '.$_GET['petugas_dinas'].'</b><br /><br />';

			$query = "SELECT * FROM rifki_pengaduan WHERE rifki_petugasdinas='".$_GET['petugas_dinas']."'"; // Tampilkan data pengaduan sesuai petugas yang diinput oleh user pada filter
		}else{ // Jika filter nya 5 (Daerah)
			echo '<b>Data Pengaduan Daerah '.$_GET['daerah'].'</b><br /><br />';

			$query = "SELECT * FROM rifki_pengaduan WHERE rifki_daerah='".$_GET['daerah']."'"; // Tampilkan data pengaduan sesuai tahun yang diinput oleh user pada filter
		}
	}else{ // Jika user tidak memilih filter
		
		$query = "SELECT * FROM rifki_pengaduan ORDER BY rifki_tgl_pengaduan"; // Tampilkan semua data pengaduan diurutkan berdasarkan tanggal
	}
	?>
		
	 	<h3 class="m-0 font-weight-bold text-secondary" align="center">Sistem Informasi Pengaduan Masyarakat</h3>
        <h4 class="m-0 font-weight-bold text-secondary" align="center">Kota Cimahi</h4>
        <h5 class="m-0 font-weight-bold text-secondary" align="center">Jl.Kalidam No.6 Rt.01 / Rw.09 Kel. Karangmekar Kec. Cimahi Tengah kode Pos 04523 Kota Cimahi Jawa Barat, Indonesia.</h5>
        <br><br><hr>
        <h4 class="m-0 font-weight-bold text-secondary" align="center">Laporan Pengaduan</h4>

	<table border="1" cellpadding="8">
	<tr>
		<th>No</th>
        <th>Tanggal</th>
        <th>Petugas Dinas</th>
        <th>Daerah</th>
        <th>Isi Laporan</th>
        <th>Status</th>
	</tr>

	<?php
	include '../rifki_koneksi.php';
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
		echo "<tr><td colspan='6'>Data tidak ada</td></tr>";
	}
	?>
	</table>

	<br>
                <br>
                <h5 class="m-0 font-weight-bold text-primary" align="right">Cimahi, <?php echo date('d m Y'); ?></h5>
                <h5 class="m-0 font-weight-bold text-primary" align="right">Petugas, </h5>
                <br><br><br><br>
                <h5 class="m-0 font-weight-bold text-primary" align="right">Admin</h5>
</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();

require '../plugin/html2pdf/autoload.php';

$pdf = new Spipu\Html2Pdf\Html2Pdf('P','A4','en');
$pdf->WriteHTML($html);
$pdf->Output('Data Pengaduan.pdf', 'D');
?>

?>
