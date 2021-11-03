<!-- Nama  : Eko Muchamad Haryono
Kelas : XII - RPL
Mapel : PWPB
Absen : 10
Tanggal Tugas : Sabtu - 26 - September - 2020 -->

<!DOCTYPE html>
<html>
<head>
	<title><?= $data['title']; ?></title> <!-- Memanggil Data Dari Model -->
</head>
<body>
	<h1><?= $data['header']; ?></h1> <!-- Memanggil Data Dari Model -->
	<hr>
	<h3><?= $data['konten']; ?></h3> <!-- Memanggil Data Dari Model -->
	<hr>
	<?= $data['footer']; ?> <!-- Memanggil Data Dari Model -->
</body>
</html>