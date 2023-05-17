<?php
include '../rifki_koneksi.php';
	$rifki_id_tgpan = $_POST['rifki_id_tgpan'];
	$rifki_id_pengaduan = $_POST['rifki_id_pengaduan'];
	$rifki_tgl = date('Y-m-d');
	$rifki_tanggapanptgs = $_POST['rifki_tanggapanptgs'];

	$sql = mysqli_query($koneksi, "INSERT INTO rifki_tanggapanptgs(rifki_id_tgpan, rifki_id_pengaduan, rifki_tgl, rifki_tanggapanptgs) VALUES ('$rifki_id_tgpan','$rifki_id_pengaduan','$rifki_tgl','$rifki_tanggapanptgs')");

	if ($sql) {
		?>
		<script type="text/javascript">
			alert ('Data sudah ditanggapi');
			window.location="rifki_petugas.php?url=rifki_verifikasi";
		</script>
		<?php
	}

?>
