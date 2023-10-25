	<?php

	//memanggil file koneksi
	include"koneksi.php";

	//untuk memulai session pada website
	session_start();

	//untuk mengambil data dari form
	$user = $_POST['user'];
	$password = $_POST['password'];

	$query = "SELECT * FROM pegawai WHERE user='".$user."' and password='".$password."'";
	$data = mysqli_query($koneksi, $query);

	$cek = mysqli_num_rows($data);

	if($cek > 0)
	{
		$baris = mysqli_fetch_array($data);
		$_SESSION['user'] = $baris['user'];
		$_SESSION['password'] = $baris['password'];
	

		header("Location:index.php");
	}
	else
	{
		header("Location:login.php?pesan=gagal");

	}
	?>