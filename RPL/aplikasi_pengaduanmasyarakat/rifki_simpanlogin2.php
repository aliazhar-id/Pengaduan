<?php
session_start();

include 'rifki_koneksi.php';
if(isset($_POST["rifki_submit"])){
	$rifki_user = $_POST['rifki_username'];
	$rifki_password = md5($_POST['rifki_password']);

	$login = mysqli_query($koneksi, "SELECT * FROM rifki_petugas where rifki_username='$rifki_user' and rifki_password='$rifki_password'");

	if (mysqli_num_rows($login)>0) {
		$rifki_user_petugas = mysqli_fetch_array($login);
		if ($rifki_user_petugas['rifki_level']=="admin") {
				$_SESSION['rifki_username'] = $username;
				$_SESSION['rifki_level'] ="admin";
			$_SESSION["rifki_id_petugas"] = $rifki_user_petugas["rifki_id_petugas"];
			$_SESSION["rifki_nama_petugas"] = $rifki_user_petugas["rifki_nama_petugas"];
			$_SESSION["rifki_username"] = $rifki_user_petugas["rifki_username"];
			$_SESSION["rifki_password"] = $rifki_user_petugas["rifki_password"];
			$_SESSION["rifki_telp"] = $rifki_user_petugas["rifki_telp"];
			header("location:admin/rifki_admin.php");

		}elseif ($rifki_user_petugas['rifki_level']=="petugas") {
				$_SESSION['rifki_username'] = $username;
				$_SESSION['rifki_level'] ="petugas";
			$_SESSION["rifki_id_petugas"] = $rifki_user_petugas["rifki_id_petugas"];
			$_SESSION["rifki_nama_petugas"] = $rifki_user_petugas["rifki_nama_petugas"];
			$_SESSION["rifki_username"] = $rifki_user_petugas["rifki_username"];
			$_SESSION["rifki_password"] = $rifki_user_petugas["rifki_password"];
			$_SESSION["rifki_telp"] = $rifki_user_petugas["rifki_telp"];
			header("location:petugas/rifki_petugas.php");
		}else{
			header("location:rifki_login2.php");
		}
		
		
	}else{
		?>
		<script type="text/javascript">
			alert('Username dan password Tidak Ditemukan!');
			window.location="rifki_login2.php";
		</script>
		<?php
	}
}
?>