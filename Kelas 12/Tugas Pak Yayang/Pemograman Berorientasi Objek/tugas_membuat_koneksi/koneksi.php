<!-- Nama  : Eko Muchamad Haryono 
Kelas  	   : XI - RPL 
Materi     : PHP
Tanggal	   : Kamis - 30 - 04 - 2020 -->
<?php  
$koneksi = mysqli_connect("localhost","root","","db_koneksi");

if (!$koneksi) {
	echo "Koneksi Ke Database Gagal. <b>Penjelasan Eror </b> : " . mysqli_connect_error();  
}else{
	echo "Koneksi Ke Database Berhasil";
}

?>