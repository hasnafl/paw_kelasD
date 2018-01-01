<?php
include('koneksi_data.php');

    if(isset($_GET['ni'])){
        $ni     = $_GET['ni'];
        $query  = mysqli_query($db_link,'select * from pendaftaran1 where id_pasien = "'.$ni.'"');
        $data   = mysqli_fetch_array($query);
        $nama   = $data['nama'];
        $umur   = $data['umur'];
        $tgl_masuk  = $data['tgl_masuk'];
        $jenis_kelamin  = $data['jenis_kelamin'];
        $alamat = $data['alamat'];
        $keluhan    = $data['keluhan'];
        $poli = $data['poli'];
        $berat_badan = $data['berat_badan'];
        $tekanan_darah = $data['tekanan_darah'];
        $diagnosa = $data['diagnosa'];
        $resep = $data['resep'];
    
	
                
        

$content = '
<style>
.tabel { border-collapse:collapse; }
.tabel th { padding:8px; background-color:#f60; color:#fff; }
</style>
';
    
$content .= '
<page>
    <div style="padding:4mm; border:1px solid;" align="center">
        <span style="font-size:25px;">KLINIK HASNA MEDICA</span>
        <br><span style="font-size:15px;">Blok Salamanggu Ds. Maja Selatan Kec. Maja Kab. Majalengka</span>
    </div>
    
    <div style="padding:20px 0 10px 0; font-size:15px;">
        
    </div>';
    $content .='
    <div id="tab_atas_identitas" class="table-responsive">
            <b>Pemeriksa : Dr. Asep Dudung</b>
            <hr>
                <table border="0" class="table ">
                <tbody>
                     <tr>
                       <td>Tanggal </td>
                       <td>:</td>
                       <td>'.$data['tgl_masuk'].'</td>   
                    </tr>
                    <tr>
                       <td width="150px">ID Pasien</td>
                       <td width="20px">:</td>
                       <td> '.$_GET['ni'].'</td>    
                    </tr>
                    <tr>
                       <td>Nama</td>
                       <td>:</td>
                       <td>'.$data['nama'].'</td>   
                    </tr>
                    <tr>
                       <td>Umur</td>
                       <td>:</td>
                       <td> '.$data['umur'].'</td>   
                    </tr>
                    <tr>
                       <td>Alamat</td>
                       <td>:</td>
                       <td>'.$data['alamat'].'</td> 
                    </tr>
                    <tr>
                       <td>Berat Badan</td>
                       <td>:</td>
                       <td> '.$data['berat_badan'].'</td>    
                    </tr>
                    <tr>
                       <td>Tekanan Darah</td>
                       <td>:</td>
                       <td> '.$data['tekanan_darah'].'</td>  
                    </tr>
                    <tr>
                       <td>Diagnosa</td>
                       <td>:</td>
                       <td> '.$data['diagnosa'].'</td>  
                    </tr>
                    <tr>
                       <td>Resep</td>
                       <td>:</td>
                       <td> '.$data['resep'].'</td>  
                    </tr> 
                </tbody>';
$content .='
    
    
    
    
    </table>
    </div>
    <hr>
    
</page>
';
}
    else{
    $nama = '';
    $umur = '';
    $tgl_masuk = '';
    $jenis_kelamin = '';
    $alamat = '';
    $keluhan = '';
    $poli = '';
    $berat_badan = '';
        $tekanan_darah = '';
        $diagnosa = '';
        $resep = '';
    }

    require_once('assets/html2pdf/html2pdf.class.php');
    $html2pdf = new HTML2PDF('P','A4','en');
    $html2pdf->WriteHTML($content);
    $html2pdf->Output('exemple.pdf');
?>