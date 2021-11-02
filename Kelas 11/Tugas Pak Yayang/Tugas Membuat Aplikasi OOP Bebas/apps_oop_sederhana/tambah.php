<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Tambah Data Siswa</h3>
<hr/>
<form method="post" action="proses_siswa.php?action=add">
<table>
	<tr>
		<td>NIS</td>
		<td>:</td>
		<td><input type="text" name="nis"/></td>
	</tr>
	<tr>
		<td>Nama Siswa</td>
		<td>:</td>
		<td><input type="text" name="nama_siswa"/></td>
	</tr>
	<tr>
		<td>Nama Jurusan</td>
		<td>:</td>
		<td><input type="text" name="nama_jurusan"/></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td><input type="text" name="jenis_kelamin"/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Simpan"/></td>
	</tr>
</table>
</form>
</body>
</html>