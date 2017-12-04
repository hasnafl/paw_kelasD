<?php
$host="localhost";
$user="root";
$pass="";
$db="klinik";
$conect=mysql_connect($host,$user,$pass);
$dbconfig =mysql_select_db($db,$conect);
$query=mysql_query("select * from gudang_obat order by kode_obat asc"); 
$result = mysql_query("select * from gudang_obat");  
$jsArray = "var prdName = new Array();\n";
echo"
<tr>
<td>Nama Obat</td>
<td>:</td>
<td>     
<select class='form-control' onchange='changeValue(this.value)'>  
<option>-------</option>";  
while ($row = mysql_fetch_array($result)) {  
echo '<option name="nama_obat"  value="' . $row['nama_obat'] . '">' . $row['nama_obat'] . '</option>';  
$jsArray .= "prdName['" . $row['nama_obat'] . "'] = {miez:'" . addslashes($row['kode_obat'])."'};\n";  
}  
echo"
</select>
</tr>
<tr>
<td>Kode Obat</td>
<td>:</td>
<td><input name='nm' id='kode_obat' disabled='' class='form-control'></td>
</tr>
";
?>
<script type="text/javascript"> 
<?php echo $jsArray; ?>
function changeValue(id){
document.getElementById('kode_obat').value = prdName[id].miez;
};
</script>
