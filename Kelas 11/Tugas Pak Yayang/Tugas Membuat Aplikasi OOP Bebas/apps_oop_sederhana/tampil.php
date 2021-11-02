<?php 	
include('class.php');
$db = new database();
$data_barang = $db->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Aplikasi Data Siswa Sederhana</h1>
<a href="tambah.php">Tambah Data</a>
<table border="5" cellpadding="10" cellspacing="5">
		<tr>
			<th>No</th>
			<th>NIS</th>
			<th>Nama siswa</th>
			<th>Nama Jurusan</th>
			<th>Jenis Kelamin</th>
		</tr>
		<?php 
		$no = 1;
		foreach($data_barang as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['nis']; ?></td>
				<td><?php echo $row['nama_siswa']; ?></td>
				<td><?php echo $row['nama_jurusan']; ?></td>
				<td><?php echo $row['jenis_kelamin']; ?></td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>