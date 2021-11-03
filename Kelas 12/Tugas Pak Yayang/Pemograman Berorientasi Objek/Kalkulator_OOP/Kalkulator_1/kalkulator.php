<?php 
	class Kalkulator
	{
    
		public function setOperasi($bilangan1,$bilangan2,$operasi)
		{
			if($operasi == 'tambah'){
      $this->hasil = $bilangan1 + $bilangan2;
			}else if($operasi == 'kurang'){
      $this->hasil = $bilangan1 - $bilangan2;
			}else if($operasi == 'bagi'){
      $this->hasil = $bilangan1 / $bilangan2;
			}else if($operasi == 'kali'){
      $this->hasil = $bilangan1 * $bilangan2;
			}
			return $this->hasil;
		}

		public function getOperasi()
		{
			$html = '<h1><center>Hasil: <u>'.$this->hasil.'</u></center></h1>';
			return $html;
		}

		
	}
 ?>