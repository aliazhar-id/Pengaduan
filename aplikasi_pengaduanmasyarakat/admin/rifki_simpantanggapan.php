<?php
include '../rifki_koneksi.php';
	$rifki_id_tanggapan = $_POST['rifki_id_tanggapan'];
	$rifki_id_pengaduan = $_POST['rifki_id_pengaduan'];
	$rifki_tgl_tanggapan = date('Y-m-d');
	$rifki_tanggapan = $_POST['rifki_tanggapan'];
	$rifki_id_petugas = $_POST['rifki_id_petugas'];
	$status = 'selesai';

	$sql = mysqli_query($koneksi, "INSERT INTO rifki_tanggapan(rifki_id_tanggapan, rifki_id_pengaduan, rifki_tgl_tanggapan, rifki_tanggapan, rifki_id_petugas) VALUES ('$rifki_id_tanggapan','$rifki_id_pengaduan','$rifki_tgl_tanggapan','$rifki_tanggapan','$rifki_id_petugas')");
	$update_status = mysqli_query($koneksi, "UPDATE rifki_pengaduan set rifki_status='$status' WHERE rifki_id_pengaduan='$rifki_id_pengaduan'");

	if ($sql) {
		?>
		<script type="text/javascript">
			alert ('Data sudah ditanggapi');
			window.location="rifki_admin.php?url=rifki_verifikasi";
		</script>
		<?php
	}

?>
