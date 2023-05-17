<?php
session_start();
	include '../rifki_koneksi.php';
	if (isset($_POST['rifki_simpan'])) {
	$rifki_nik=$_POST['rifki_nik'];
	$rifki_nama=$_POST['rifki_nama'];
	$rifki_username=$_POST['rifki_username'];
	$rifki_password=md5($_POST['rifki_password']);
	$rifki_telp=$_POST['rifki_telp'];
	
		$sql="UPDATE rifki_masyarakat SET rifki_nik='$rifki_nik', rifki_nama='$rifki_nama', rifki_username='$rifki_username', rifki_password='$rifki_password', rifki_telp='$rifki_telp' WHERE rifki_nik='$rifki_nik'";
		$cek=mysqli_query($koneksi, $sql);
		if ($cek) {
			header('location:rifki_admin.php?url=rifki_lihatmasyarakat');
		}else
			{
				echo "gagal";
			}

	}
?>