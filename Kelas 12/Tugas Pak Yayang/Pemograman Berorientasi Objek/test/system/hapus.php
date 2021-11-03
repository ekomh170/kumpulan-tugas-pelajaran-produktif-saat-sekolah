<?php  
if(isset($_GET["nis"])){
include '../../config/koneksi.php';
	$cek = mysqli_query($koneksi, "DELETE FROM db_siswa WHERE nis = ".$_GET["id"]);
	var_dump($cek);
}
echo "
		<script>
			alert('Data Berhasil DiHapus!');
			document.location.href = 'index.php';
		</script>
	";
?>
