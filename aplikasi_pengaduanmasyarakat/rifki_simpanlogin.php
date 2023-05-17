<?php
session_start();

include 'rifki_koneksi.php';
if(isset($_POST["rifki_submit"])){
	$username = $_POST['rifki_username'];
	$password = md5($_POST['rifki_password']);

	$login = mysqli_query($koneksi, "SELECT * FROM rifki_masyarakat where rifki_username='$username' and rifki_password='$password'");

	if (mysqli_num_rows($login)>0) {
		
		echo "<br>login sukses";
		$data = mysqli_fetch_array($login);
		$_SESSION['rifki_username'] = $data['rifki_username'];
		$_SESSION['rifki_password'] = $data['rifki_password'];
		$_SESSION['rifki_nama'] = $data['rifki_nama'];
		$_SESSION['rifki_nik'] = $data['rifki_nik'];
		header("location:rifki_masyarakat.php");
	}else{
		?>
		<script type="text/javascript">
			alert('Username dan password Tidak Ditemukan!');
			window.location="rifki_login.php";
		</script>
		<?php
	}

}
?>