<?php
include('koneksi_data.php');
if(isset($_POST['ttambah'])){ //['ttambah'] merupakan name dari button di form tambah
	$id_pasien	= $_POST['id_pasien'];
	$nama	= $_POST['nama'];
	$umur	= $_POST['umur'];
	$tgl_masuk	= date("Y-m-d");
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $keluhan = $_POST['keluhan'];
    $poli = $_POST['poli'];
	
	$sql	= 'insert into pendaftaran1 (id_pasien,nama,umur,tgl_masuk,jenis_kelamin, alamat, keluhan, poli) values ("'.$id_pasien.'","'.$nama.'","'.$umur.'","'.$tgl_masuk.'","'.$jenis_kelamin.'","'.$alamat.'","'.$keluhan.'","'.$poli.'")';
	$query	= mysqli_query($db_link,$sql);
	
	if($query){
		header('location: pendaftaran.php'); //kode ini supaya jika data setelah ditambahkan form kembali menuju tabel data siswa
	}
	else{
		echo 'Gagal';
	}
}

if(isset($_POST['tedit'])){
	$nama	= $_POST['nama'];
	$umur	= $_POST['umur'];
	$tgl_masuk	= date("Y-m-d");
    $jenis_kelamin	= $_POST['jenis_kelamin'];
    $alamat	= $_POST['alamat'];
    $keluhan	= $_POST['keluhan'];
    $poli = $_POST['poli'];
	$id_pasien	= $_POST['id_pasien'];
	
	$sql	= 'update pendaftaran1 set nama="'.$nama.'", umur="'.$umur.'", jenis_kelamin="'.$jenis_kelamin.'", alamat="'.$alamat.'", keluhan="'.$keluhan.'", poli="'.$poli.'" where id_pasien="'.$id_pasien.'"';
	$query	= mysqli_query($db_link,$sql);
	
	if($query){
		header('location: pendaftaran.php');
	}
	else{
		echo 'Gagal';
	}
}

if(isset($_POST['diagnosakia'])){
	$nama	= $_POST['nama'];
	$umur	= $_POST['umur'];
	$tgl_masuk	= date("Y-m-d");
    $jenis_kelamin	= $_POST['jenis_kelamin'];
    $alamat	= $_POST['alamat'];
    $keluhan	= $_POST['keluhan'];
	$id_pasien	= $_POST['id_pasien'];
    $berat_badan = $_POST['berat_badan'];
    $tekanan_darah = $_POST['tekanan_darah'];
    $resep = $_POST['resep'];
    $poli = $_POST['poli'];
    $diagnosa = $_POST['diagnosa'];
	
	$sql	= 'update pendaftaran1 set diagnosa="'.$diagnosa.'", berat_badan="'.$berat_badan.'", tekanan_darah="'.$tekanan_darah.'", resep="'.$resep.'" where id_pasien="'.$id_pasien.'"';
	$query	= mysqli_query($db_link,$sql);
	
	if($query){
		header('location: poli_kia.php');
	}
	else{
		echo 'Gagal';
	}
}

if(isset($_POST['diagnosaumum'])){
	$nama	= $_POST['nama'];
	$umur	= $_POST['umur'];
	$tgl_masuk	= date("Y-m-d");
    $jenis_kelamin	= $_POST['jenis_kelamin'];
    $alamat	= $_POST['alamat'];
    $keluhan	= $_POST['keluhan'];
	$id_pasien	= $_POST['id_pasien'];
    $berat_badan = $_POST['berat_badan'];
    $tekanan_darah = $_POST['tekanan_darah'];
    $resep = $_POST['resep'];
    $poli = $_POST['poli'];
    $diagnosa = $_POST['diagnosa'];
	
	$sql	= 'update pendaftaran1 set diagnosa="'.$diagnosa.'", berat_badan="'.$berat_badan.'", tekanan_darah="'.$tekanan_darah.'", resep="'.$resep.'" where id_pasien="'.$id_pasien.'"';
	$query	= mysqli_query($db_link,$sql);
	
	if($query){
		header('location: poli_umum.php');
	}
	else{
		echo 'Gagal';
	}
}

if(isset($_POST['diagnosagigi'])){
	$nama	= $_POST['nama'];
	$umur	= $_POST['umur'];
	$tgl_masuk	= date("Y-m-d");
    $jenis_kelamin	= $_POST['jenis_kelamin'];
    $alamat	= $_POST['alamat'];
    $keluhan	= $_POST['keluhan'];
	$id_pasien	= $_POST['id_pasien'];
    $berat_badan = $_POST['berat_badan'];
    $tekanan_darah = $_POST['tekanan_darah'];
    $resep = $_POST['resep'];
    $poli = $_POST['poli'];
    $diagnosa = $_POST['diagnosa'];
	
	$sql	= 'update pendaftaran1 set diagnosa="'.$diagnosa.'", berat_badan="'.$berat_badan.'", tekanan_darah="'.$tekanan_darah.'", resep="'.$resep.'" where id_pasien="'.$id_pasien.'"';
	$query	= mysqli_query($db_link,$sql);
	
	if($query){
		header('location: poli_gigi.php');
	}
	else{
		echo 'Gagal';
	}
}

if(isset($_POST['tambahuser'])){
    $nip = $_POST['nip'];
    $nama_pengguna = $_POST['nama_pengguna'];
    $hak_akses = $_POST['hak_akses'];
    
    $sql = 'insert into pengguna (nip, nama_pengguna, hak_akses) values ("'.$nip.'", "'.$nama_pengguna.'", "'.$hak_akses.'")';
    $query = mysqli_query($db_link,$sql);
    if($query){
		header('location: daftar_pengguna.php');
	}
	else{
		echo 'Gagal';
	}
}

if(isset($_POST['simpanresep'])){
 
    $nama_resep = $_POST['nama_resep'];
    $jumlah = $_POST['jumlah'];
    $dosis = $_POST['dosis'];
    
    $sql = 'insert into resep (nama_resep, jumlah, dosis) values ("'.$nama_resep.'", "'.$jumlah.'", "'.$dosis.'")';
    $query = mysqli_query($db_link,$sql);
    if($query){
		header('location: resep.php');
	}
	else{
		echo 'Gagal';
	}
}

if(isset($_POST['tambahobat'])){
    $kode_obat = $_POST['kode_obat'];
    $nama_obat = $_POST['nama_obat'];
    $jenis_obat = $_POST['jenis_obat'];
    $stok = $_POST['stok'];
    
    $sql = 'insert into gudang_obat (kode_obat, nama_obat, jenis_obat, stok) values ("'.$kode_obat.'", "'.$nama_obat.'", "'.$jenis_obat.'", "'.$stok.'")';
    $query = mysqli_query($db_link,$sql);
    if($query){
		header('location: gudang_obat.php');
	}
	else{
		echo 'Gagal';
	}
}

if(isset($_POST['editobat'])){
	$nama_obat	= $_POST['nama_obat'];
	$jenis_obat	= $_POST['jenis_obat'];
    $stok	= $_POST['stok'];
	$kode_obat	= $_POST['kode_obat'];
	
	$sql	= 'update gudang_obat set nama_obat="'.$nama_obat.'", jenis_obat="'.$jenis_obat.'", stok="'.$stok.'" where kode_obat="'.$kode_obat.'"';
	$query	= mysqli_query($db_link,$sql);
	
	if($query){
		header('location: gudang_obat.php');
	}
	else{
		echo 'Gagal';
	}
}




?>