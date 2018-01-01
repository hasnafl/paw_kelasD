<?php 

include 'config.php';
$nama_resep = $_POST['nama_resep'];
$jumlah = $_POST['jumlah'];
$dosis = $_POST['dosis'];
$tgl = date("Y-m-d");

$dt = mysql_query("select * from gudang_obat where nama_obat='$nama_resep'");
$data = mysql_fetch_array($dt);
$sisa=$data['stok']-$jumlah;
mysql_query("update gudang_obat set stok='$sisa' where nama_obat='$nama_resep'");


mysql_query("insert into resep values('$nama_resep','$jumlah','$dosis','$tgl')")or die(mysql_error());
header("location:resep.php");


?>