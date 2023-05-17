<?php
session_start();

include 'rifki_koneksi.php';
if(isset($_POST["rifki_submit"])){
	$rifki_id_pengaduan = $_POST['rifki_id_pengaduan'];
	$rifki_tgl_pengaduan = date('Y/m/d');
	$rifki_nik = $_POST['rifki_nik'];
	$rifki_petugasdinas = $_POST['rifki_petugasdinas'];
	$rifki_daerah = $_POST['rifki_daerah'];
	$rifki_isi_laporan = $_POST['rifki_isi_laporan'];
	$rifki_foto = $_FILES['rifki_foto']['name'];
	$file = $_FILES['rifki_foto']['tmp_name'];
	$rifki_status = 'Belum';
	
	$pengaduan = "INSERT INTO rifki_pengaduan(rifki_id_pengaduan, rifki_tgl_pengaduan, rifki_nik, rifki_petugasdinas, rifki_daerah, rifki_isi_laporan, rifki_foto, rifki_status) VALUES('$rifki_id_pengaduan','$rifki_tgl_pengaduan','$rifki_nik','$rifki_petugasdinas','$rifki_daerah','$rifki_isi_laporan','$rifki_foto','$rifki_status')";
move_uploaded_file($file, "foto/".$rifki_foto);
	$query = mysqli_query($koneksi, $pengaduan);

	if ($query) {
		header("Location:rifki_masyarakat.php?url=lihat_pengaduan");
	}else{
		echo "<script>alert('Data berhasil disimpan, terima kasih sudah menulis laporan pengaduan masyarakat')</script>";
	}
		
}