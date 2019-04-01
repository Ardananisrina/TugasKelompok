<?php

session_start();
include('koneksi_db.php');
session_destroy();
header("location: index.php");
?>
