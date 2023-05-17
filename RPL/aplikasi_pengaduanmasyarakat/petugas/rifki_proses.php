<?php
include '../rifki_koneksi.php';
$sql = mysqli_query($koneksi, "UPDATE rifki_pengaduan SET rifki_status='proses' WHERE rifki_id_pengaduan='$_GET[id]'");
if ($sql) {
	header('location:rifki_petugas.php?url=rifki_verifikasi');
}
?>