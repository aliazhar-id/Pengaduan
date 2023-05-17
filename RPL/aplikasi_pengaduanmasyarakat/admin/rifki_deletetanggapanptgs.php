<?php
include '../rifki_koneksi.php';
$id=$_GET['id'];
$data = mysqli_query($koneksi,"DELETE FROM rifki_tanggapanptgs WHERE rifki_id_tgpan='$id'");
$sql2 = "DELETE FROM rifki_tanggapanptgs WHERE rifki_id_tgpan='$rifki_id_tgpan'";
	 $query=mysqli_query($koneksi, $sql2);
	 if($query)
	 {
	 echo"<script>location = 'rifki_admin.php?url=rifki_lihattanggapanptgs';</script>";
	 }
	 
?>