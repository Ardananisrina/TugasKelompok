<?php

	include ('koneksi_db.php');

	$kd_user = $_POST['kd_user'];
	$nm_user = $_POST['nm_user'];
	$pass = $_POST['password'];
	$password = md5($pass);
	$level = $_POST['level'];

	$query = "INSERT INTO user (kd_user, nm_user, password, level) VALUES ('$kd_user', '$nm_user', '$password', '$level')";
	$result = mysqli_query($query);
	header("Location:admin.php?p=user/user");
	if(!empty($_GET['p'])){
		if(file_exists($_GET['p'].".php")){
			require_once)($_GET['p'].".php");
		}
	}
?>
