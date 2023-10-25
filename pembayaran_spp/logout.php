	<?php
		session_start();
		unset($_SESSION['kode_pegawai']);
		unset($_SESSION['user']);
		unset($_SESSION['password']);
		session_destroy();

		header("Location:login.php");


	?>