<?php
session_start();
	include '../rifki_koneksi.php';
	if (isset($_POST['rifki_simpan'])) {
	$rifki_id_tanggapan=$_POST['rifki_id_tanggapan'];
	$rifki_id_pengaduan=$_POST['rifki_id_pengaduan'];
	$rifki_tgl_tanggapan=$_POST['rifki_tgl_tanggapan'];
	$rifki_tanggapan=$_POST['rifki_tanggapan'];
	$rifki_id_petugas=$_POST['rifki_id_petugas'];
	
		$sql="UPDATE rifki_tanggapan SET rifki_id_tanggapan='$rifki_id_tanggapan', rifki_id_pengaduan='$rifki_id_pengaduan', rifki_tgl_tanggapan='$rifki_tgl_tanggapan', rifki_tanggapan='$rifki_tanggapan', rifki_id_petugas='$rifki_id_petugas' WHERE rifki_id_tanggapan='$rifki_id_tanggapan'";
		$cek=mysqli_query($koneksi, $sql);
		if ($cek) {
			header('location:rifki_admin.php?url=rifki_lihattanggapan');
		}else
			{
				echo "gagal";
			}

	}
?>