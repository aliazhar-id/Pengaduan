<?php
include '../rifki_koneksi.php';
$id=$_GET['id'];
$data = mysqli_query($koneksi,"DELETE FROM rifki_petugas WHERE rifki_id_petugas='$id'");
$sql2 = "DELETE FROM rifki_petugas WHERE rifki_id_petugas='$rifki_id_petugas'";
	 $query=mysqli_query($koneksi, $sql2);
	 if($query)
	 {
	 echo"<script>location = 'rifki_admin.php?url=rifki_lihatpetugas';</script>";
	 }
	 
?>