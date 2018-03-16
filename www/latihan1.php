<?php
echo '<h1>Latihan 1 : Buka Tutup Koneksi Mysql</h1>
<hr>';


$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'adminadmin';
$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $koneksi )
{
  die('Gagal Koneksi: ' . mysql_error());
}
echo 'Koneksi Berhasil';
mysql_close($koneksi);
?>
