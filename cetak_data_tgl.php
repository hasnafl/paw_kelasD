<?php
include('koneksi_data.php'); 
if(isset($_POST['cetak_data_tgl'])){
    $tgl_a = $_POST['tgl_a'];
    $tgl_b = $_POST['tgl_b'];
	
	$sql	= 'select*from pendaftaran1 where tgl_masuk between "'.$tgl_a.'" and "'.$tgl_b.'"';
	$query	= mysqli_query($db_link,$sql);
	
	if($query){
                $i = 0;
        

$content = '
<style>
.tabel { border-collapse:collapse; }
.tabel th { padding:8px; background-color:#f60; color:#fff; }
</style>
';
    
$content .= '
<page>
    <div style="padding:4mm; border:1px solid;" align="center">
        <span style="font-size:25px;">Laporan Data Pasien</span>
    </div>
    
    <div style="padding:20px 0 10px 0; font-size:15px;">
        
    </div>
    
    <table border="1px" class="tabel" align="center">
    
    <tr>
        <th> No. </th>
        <th> Id pasien </th>
        <th> Nama </th>
        <th> Umur </th>
        <th> tanggal masuk </th>
        <th> P/L </th>
        <th> alamat </th>
        <th> BB </th>
        <th> TD </th>
        <th> diagnosa </th>
        <th> resep </th>
    </tr>';
    
    
    
    while($data	= mysqli_fetch_array($query)){
    $i = $i+1;
    $content .='
    <tr>
        <td align="center">'.$i.'</td>
        <td>'.$data['id_pasien'].'</td>
        <td>'.$data['nama'].'</td>
        <td>'.$data['umur'].'</td>
        <td>'.$data['tgl_masuk'].'</td>
        <td>'.$data['jenis_kelamin'].'</td>
        <td>'.$data['alamat'].'</td>
        <td>'.$data['berat_badan'].'</td>
        <td>'.$data['tekanan_darah'].'</td>
        <td>'.$data['diagnosa'].'</td>
        <td>'.$data['resep'].'</td>
        
                
    </tr>';

 
    }

$content .='
    
    
    </table>
</page>
';

    require_once('assets/html2pdf/html2pdf.class.php');
    $html2pdf = new HTML2PDF('P','A4','en');
    $html2pdf->WriteHTML($content);
    $html2pdf->Output('exemple.pdf');

}
else{
		echo 'Gagal';
	}

}
?>