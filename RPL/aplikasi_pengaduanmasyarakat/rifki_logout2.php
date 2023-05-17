<?php
session_start();
unset($_SESSION['rifki_nama']);
session_destroy();
header('location:rifki_login2.php');
?>