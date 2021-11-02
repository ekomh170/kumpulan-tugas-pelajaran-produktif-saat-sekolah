<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator Berbasis OOP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
	if(isset($_POST['hitung'])){
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'tambah':
			$hasil = $bil1+$bil2;
			break;
			case 'kurang':
			$hasil = $bil1-$bil2;
			break;
			case 'kali':
			$hasil = $bil1*$bil2;
			break;
			case 'bagi':
			$hasil = $bil1/$bil2;
			break;			
		}
	}
	?>
	<div class="kalkulator">
		<h2 class="judul">KALKULATOR <br>OOP</h2>
		<p class="brand">Aplikasi Sederhana Berbasis OPP</p>
		<form method="post" action="index.php">			
			<input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Bilangan/Angka 1">
			<input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan Bilangan/Angka 2">
			<select class="opt" name="operasi">
				<option value="tambah">+</option>
				<option value="kurang">-</option>
				<option value="kali">x</option>
				<option value="bagi">/</option>
			</select>
			<input type="submit" name="hitung" value="Hitung" class="tombol">
			<?php if(isset($_POST['hitung'])){ ?>
				<input type="text" value="<?php echo $hasil; ?>" class="bil">
			<?php }else{ ?>
				<input type="text" value="0" class="bil">
			<?php } ?>
			<center><button type="submit" name="reset" value="Hitung" class="tombol2">Ulang Operasi Hitung</button></center>
		</form>
	</div>
</body>
</html>