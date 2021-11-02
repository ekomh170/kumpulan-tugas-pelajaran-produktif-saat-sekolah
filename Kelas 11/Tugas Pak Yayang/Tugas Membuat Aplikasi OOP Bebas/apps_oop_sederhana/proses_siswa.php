<?php 
include('class.php');
$koneksi = new database();

$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data($_POST['nis'],$_POST['nama_siswa'],$_POST['nama_jurusan'],$_POST['jenis_kelamin']);
	header('location:tampil.php');
}
?>