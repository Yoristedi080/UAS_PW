<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$name = "contoh";
	$koneksi = mysqli_connect($host, $user, $pass) or die ("koneksi ke database gagal");
	mysqli_select_db($koneksi, $name);
?>