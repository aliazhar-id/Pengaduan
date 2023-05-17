<?php
session_start();

include 'rifki_koneksi.php';
if(isset($_POST["rifki_submit"])){
	$rifki_nik = $_POST['rifki_nik'];
	$rifki_nama = $_POST['rifki_nama'];
	$rifki_username = $_POST['rifki_username'];
	$rifki_password = md5($_POST['rifki_password']);
	$rifki_telp = $_POST['rifki_telp'];
	
	$register = "INSERT INTO rifki_masyarakat VALUES('$rifki_nik','$rifki_nama','$rifki_username','$rifki_password','$rifki_telp')";
	$query = mysqli_query($koneksi, $register);

	if ($register) {
		echo "<script>alert('Data berhasil disimpan');</script>";
		header("Location:rifki_login.php");
	}else{
		echo "gagal".mysqli_error($koneksi);
	}
		
}
?>