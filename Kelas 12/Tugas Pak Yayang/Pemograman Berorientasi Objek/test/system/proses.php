<?php


include('../config/koneksi.php');

$nis  = $_POST['nis'];
$nama_sws  = $_POST['nama_sws'];
$nama_jurusan = $_POST['nama_jurusan'];
$nama_kelas = $_POST['nama_kelas'];

$input = mysqli_query($koneksi,"INSERT INTO db_siswa VALUES('$nis', '$nama_sws', '$nama_jurusan' ,'$nama_kelas')") or die(mysqli_error($koneksi));

if($input){

    echo "
    <script>
    alert('Data Berhasil Di Tambahkan!');
    document.location.href = 'index.php';
    </script>
    ";

}else{

    echo "
    <script>
    alert('Data Gagal Ditambahkan!');
    document.location.href = 'tambah.php';
    </script>   

    ";      
}
?>

?>