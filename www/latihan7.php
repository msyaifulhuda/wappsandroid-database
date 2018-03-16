<html>
<head>
<title>Menghapus data MySQL - Nyekrip</title>
</head>
<body>
 
<?php
echo '<h1>Latihan 7 : Hapus Data</h1>
<hr>';




if(isset($_POST['hapus']))
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'adminadmin';
$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $koneksi )
{
  die('Gagal Koneksi: ' . mysql_error());
}
 
$id_karyawan = $_POST['id_karyawan'];
 
$sql = "DELETE FROM karyawan ".
       "WHERE id_karyawan = $id_karyawan" ;
 
mysql_select_db('test_db');
$hapusdata = mysql_query( $sql, $koneksi );
if(! $hapusdata )
{
  die('Gagal hapus data: ' . mysql_error());
}
echo "Berhasil hapus data\n";
mysql_close($koneksi);
}
else
{
?>
<form method="post" action="latihan7.php">
<table width="500" border="0" cellspacing="1" cellpadding="2">
<tr>
<td width="100">ID KARYAWAN</td>
<td><input name="id_karyawan" type="text" id="id_karyawan"></td>
</tr>
<tr>
<td width="100"> </td>
<td> </td>
</tr>
<tr>
<td width="100"> </td>
<td>
<input name="hapus" type="submit" id="hapus" value="Delete">
</td>
</tr>
</table>
</form>
<?php
}
?>
</body>
</html>
