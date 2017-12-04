<?php
include('koneksi_data.php');
$ni	= $_GET['ni'];

$sql 	= 'delete from pendaftaran1 where id_pasien="'.$ni.'"';
$query	= mysqli_query($db_link,$sql);
header('location: pendaftaran.php');
?>