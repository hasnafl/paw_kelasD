<?php
	$host ="localhost";
	$user = "root";
	$password = "";
	$database = "klinik";
	$connect = mysqli_connect($host,$user,$password,$database);

		$login=mysqli_query($connect,"SELECT * FROM login ");
		$login1=mysqli_query($connect,"SELECT * FROM login WHERE username = 'klinik1'");
		$user = mysqli_num_rows($login);
		$user1 = mysqli_fetch_array($login1);
		$hakakses = $user1['akses'];
?>