<style>
.container{
width: 17%;
margin:auto;
border: 1px solid #111;	
padding:7px;
}	
</style>
<h1><center>Kalkulator Sederhana OOP</center></h1>
<?php
echo "
<div class='container'>
<form action='' method='post'>
<p><b>Bilangan 1 : </b><input type='text' name='bilangan1'></p>
<p><input type='Radio' name='operasi' value='tambah'> + <b><span style='font-size:10px;'>( PENJUMLAHAN )</span></b></p>
<p><input type='Radio' name='operasi' value='kurang'> - <b><span style='font-size:10px;'>( PENGURANGAN )</span></b></p>
<p><input type='Radio' name='operasi' value='bagi'> / <b><span style='font-size:10px;'>( PEMBAGIAN )</span></b></p>
<p><input type='Radio' name='operasi' value='kali'> x <b><span style='font-size:10px;'>( PERKALIAN )</span></b></p>
<p><b>Bilangan 2 :</b> <input type='text' name='bilangan2'></p>
<input type='submit' name='submit' value='Submit'>
</form>	
</div>
";

include "Kalkulator.php";

$kalkulator = new Kalkulator;

 if(isset($_POST['submit'])){
	$kalkulator->setOperasi($_POST['bilangan1'],$_POST['bilangan2'], $_POST['operasi']);
	echo $kalkulator->getOperasi();
 }