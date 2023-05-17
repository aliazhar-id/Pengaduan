<?php
include '../rifki_koneksi.php';
$id=$_GET['id'];
$data = mysqli_query($koneksi,"DELETE FROM rifki_pengaduan WHERE rifki_id_pengaduan='$id'");
$sql2 = "DELETE FROM rifki_pengaduan WHERE rifki_id_pengaduan='$rifki_id_pengaduan'";
	 $query=mysqli_query($koneksi, $sql2);
	 if($query)
	 {
	 echo"<script>location = 'rifki_admin.php?url=rifki_lihatpengaduan';</script>";
	 }
	 
?>