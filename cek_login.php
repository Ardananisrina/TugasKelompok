<?php

	session_start();
	include("koneksi_db.php");

	$nm_user = md5($_POST['nm_user']);
	$pass = $_POST['password'];
	$password = md5($pass);

	$query = "SELECT * FROM user WHERE nm_user = '$nm_user' AND password = '$password'";
	$result = mysqli_query($koneksi, $query);

	if(mysqli_num_rows($result)!=0){

		$row = mysqli_fetch_array($result);
		$_SESSION['kd_user'] = $row['kd_user'];
		$_SESSION['nm_user'] = $row['nm_user'];
		$_SESSION['password'] = $row['password'];
		$_SESSION['level'] = $row['level'];

		if($row['level'] == 'admin' || $row['level'] == 'user'){
			header("location : admin.php");
		}
	}
	else {
		echo "Anda tidak berhasil Login!";
		echo "<a href='index.php'>Silahkan Login lagi</a>";
	}
?>
