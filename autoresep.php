<?php
mysql_connect("localhost","root","");
mysql_select_db("klinik");

$q = strtolower($_GET["term"]);
if (!$q) return;

$sql = mysql_query('select nama_obat from gudang_obat where nama_obat LIKE "'.$q.'"');
while($r = mysql_fetch_array($sql)) {
 $nama_obat = $r['nama_obat'];
 echo "$nama_obat \n";
}
?>