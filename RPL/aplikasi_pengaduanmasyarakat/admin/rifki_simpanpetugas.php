<?php
session_start();
include '../rifki_koneksi.php';
	if(isset($_POST['rifki_simpan'])){
	$rifki_id_petugas=$_POST['rifki_id_petugas'];
	$rifki_nama_petugas=$_POST['rifki_nama_petugas'];
	$rifki_username=$_POST['rifki_username'];
	$rifki_password=md5($_POST['rifki_password']);
	$rifki_telp=$_POST['rifki_telp'];
	$rifki_level=$_POST['rifki_level'];
	
		$query="INSERT INTO rifki_petugas values ('$rifki_id_petugas','$rifki_nama_petugas','$rifki_username','$rifki_password','$rifki_telp','$rifki_level')";
		$cek=mysqli_query($koneksi, $query);
		if ($cek) {
			header('location:rifki_admin.php?url=rifki_lihatpetugas');
		}else
			{
				echo "gagal";
			}

	}
?>
