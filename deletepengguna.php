<?php
include('koneksi_data.php');
$ni	= $_GET['ni'];

$sql 	= 'delete from pengguna where nip="'.$ni.'"';
$query	= mysqli_query($db_link,$sql);
header('location: daftar_pengguna.php');
?>