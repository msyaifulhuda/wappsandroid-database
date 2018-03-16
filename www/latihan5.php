<?php
echo '<h1>Latihan 5 : Menampilkan Data</h1>
<hr>';





$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'adminadmin';
$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $koneksi )
{
  die('Gagal Koneksi: ' . mysql_error());
}
$sql = 'SELECT id_karyawan, nama_karyawan, gaji_karyawan FROM karyawan';
 
mysql_select_db('test_db');
$ambildata = mysql_query( $sql, $koneksi);
if(! $ambildata )
{
  die('Gagal ambil data: ' . mysql_error());
}
while($row = mysql_fetch_array($ambildata, MYSQL_NUM))
{
    echo "ID KARYAWAN :{$row[0]}  <br> ".
         "NAMA KARYAWAN : {$row[1]} <br> ".
         "GAJI KARYAWAN : {$row[2]} <br> ".
         "--------------------------------<br>";
} 
mysql_free_result($ambildata);
echo "Berhasil ambil data\n";
mysql_close($koneksi);
?>
