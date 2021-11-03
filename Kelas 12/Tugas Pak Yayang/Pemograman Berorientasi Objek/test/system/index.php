<?php 
include '../config/koneksi.php';	
$query = "SELECT * FROM db_siswa";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<button><a href="tambah.php">Tambah Data</a></button>
	<table class="table table-bordered">
		<tr>
			<!-- <th>No</th> -->
			<th>Nis</th>
			<th>Nama Siswa</th>
			<th>Nama Jurusan</th>
			<th>Nama Kelas</th>
		</tr>
		<?php foreach ($result as $data): ?>
			<tr>
				<td><?= $data["nis"]?></td>
				<td><?= $data["nama_sws"]?></td>
				<td><?= $data["nama_jurusan"]?></td>
				<td><?= $data["nama_kelas"]?></td>
				<td>
					<a href="edit.php<?= $data['nis'];?>">Edit</a>
					<a href="hapus.php"<?= $data['nis'];?>>Hapus</a>
				</td>
			</tr>
		<?php endforeach ?>
	</table>	
	
</body>
</html>

