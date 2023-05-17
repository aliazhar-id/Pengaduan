<?php
include '../rifki_koneksi.php';
$nik=$_GET['nik'];
$data = mysqli_query($koneksi,"DELETE FROM rifki_masyarakat WHERE rifki_nik='$nik'");
$sql2 = "DELETE FROM rifki_masyarakat WHERE rifki_nik='$rifki_nik'";
	 $query=mysqli_query($koneksi, $sql2);
	 if($query)
	 {
	 echo"<script>location = 'rifki_admin.php?url=rifki_lihatmasyarakat';</script>";
	 }
	 
?>