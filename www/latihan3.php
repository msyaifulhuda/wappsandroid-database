<?php
echo '<h1>Latihan 3 : Menghapus Table</h1>
<hr>';




$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'adminadmin';
$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $koneksi )
{
  die('Gagal Koneksi: ' . mysql_error());
}


mysql_select_db('test_db');
$sql = 'DROP TABLE karyawan';
$hapustabel = mysql_query( $sql, $koneksi );
if(! $hapustabel )
{
  die('Gagal Hapus tabel karyawan: ' . mysql_error());
}
echo "Berhasil hapus tabel karywan\n";
mysql_close($koneksi );
?>
