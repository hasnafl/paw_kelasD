<?php
include('koneksi_data.php');
$ni	= $_GET['ni'];

$sql 	= 'delete from gudang_obat where kode_obat="'.$ni.'"';
$query	= mysqli_query($db_link,$sql);
header('location: gudang_obat.php');
?>