<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "rifki_db_pengaduan";

$koneksi = new mysqli( $host, $username, $password, $database);
if ($koneksi->connect_error) {
	die("koneksi gagal:" . $koneksi->connect_error);
}
echo "";
?>