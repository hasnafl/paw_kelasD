<?php
include('koneksi_data.php');
$ni	= $_GET['ni'];

$sql 	= 'delete from antrian_gigi where no_antrian ="'.$ni.'"';
$query	= mysqli_query($db_link,$sql);
header('location: klinik1.php');
?>