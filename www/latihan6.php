<html>
 <head>
  <title>Update data dalam database MySQL</title>
 </head>
	<body>
 
	<?php
	echo '<h1>Latihan 6 : Update Data</h1>
	<hr>';

	if(isset($_POST['update']))
	{
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = 'adminadmin';
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $conn )
	{
	  die('Tidak bisa Koneksi: ' . mysql_error());
	}
 
	$id = $_POST['id_karyawan'];
	$gaji = $_POST['gaji_karyawan'];
 
	$sql = "UPDATE karyawan ".
		   "SET gaji_karyawan = $gaji ".
		   "WHERE id_karyawan = $id" ;
 
	mysql_select_db('test_db');
	$retval = mysql_query( $sql, $conn );
	if(! $retval )
	{
	  die('Tidak bisa update data: ' . mysql_error());
	}
	echo "Updated data sukses\n";
	mysql_close($conn);
	}
	else
	{
	?>
	<form method="post" action="latihan6.php">
		<table width="500" border="0" cellspacing="1" cellpadding="2">
			<tr>
			<td width="100">ID Karyawan</td>
			<td><input name="id_karyawan" type="text" id="id_karyawan"></td>
			</tr>
			<tr>
			<td width="100">Gaji Karyawan</td>
			<td><input name="gaji_karyawan" type="text" id="gaji_karyawan"></td>
			</tr>
			<tr>
			<td width="100"> </td>
			<td> </td>
			</tr>
			<tr>
			<td width="100"> </td>
			<td>
			<input name="update" type="submit" id="update" value="Update">
			</td>
		</tr>
		</table>
	</form>
	<?php
	}
	?>
	</body>
</html>
