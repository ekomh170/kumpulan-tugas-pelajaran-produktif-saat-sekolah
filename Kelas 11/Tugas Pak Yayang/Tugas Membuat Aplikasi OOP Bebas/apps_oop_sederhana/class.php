<?php 
class database{

	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "db_latihan_oop";
	var $koneksi = "";
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}

	function tampil_data()
	{
		$data = mysqli_query($this->koneksi,"SELECT * FROM tb_siswa");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	function tambah_data($nis,$nama_siswa,$nama_jurusan,$jenis_kelamin)
	{
		$data = mysqli_query($this->koneksi,"INSERT INTO tb_siswa VALUES('$nis','$nama_siswa','$nama_jurusan','$jenis_kelamin')");
	}
}