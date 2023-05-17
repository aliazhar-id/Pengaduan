<?php
include '../rifki_koneksi.php';
$id=$_GET['id'];
$data = mysqli_query($koneksi,"DELETE FROM rifki_tanggapan WHERE rifki_id_tanggapan='$id'");
$sql2 = "DELETE FROM rifki_tanggapan WHERE rifki_id_tanggapan='$rifki_id_tanggapan'";
	 $query=mysqli_query($koneksi, $sql2);
	 if($query)
	 {
	 echo"<script>location = 'rifki_admin.php?url=rifki_lihattanggapan';</script>";
	 }
	 
?>