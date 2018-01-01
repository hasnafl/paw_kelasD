<?php
include('koneksi_data.php');
if(isset($_POST['simpanresep'])){
$nama_resep = $_POST['nama_resep'];
$jumlah = $_POST['jumlah'];
$dosis = $_POST['dosis'];
$tgl = date("Y-m-d");

$sql = 'select * from gudang_obat where nama_obat = "'.$nama_resep.'"';
$query	= mysqli_query($db_link,$sql);
if($query)
{
	$data = mysqli_fetch_array($query);
	$sisa = $data['stok']-$jumlah;
	$sql2 = 'update gudang_obat set stok = "'.$sisa.'" where nama_obat= "'.$nama_resep.'"';
	$query2 = mysqli_query($db_link,$sql2);
	if($query2)
	{
		header('location:resep.php');
	}
	else
	{
		echo "gagal";
	}
}
else
{
	echo "1 gagal";
}

}

?>