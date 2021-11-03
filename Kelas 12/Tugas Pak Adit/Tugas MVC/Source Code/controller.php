<!-- Nama  : Eko Muchamad Haryono
Kelas : XII - RPL
Mapel : PWPB
Absen : 10
Tanggal Tugas : Sabtu - 26 - September - 2020 -->

<?php 
	class Controller {
		public function __construct(){
			$model = new Model; //membuat model baru 
			$data = $model-> show_message();
			require_once 'view.php'; //memanggil file view.php
		}
	}
 ?>