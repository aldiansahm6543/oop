<?php 

/**
 * 
 */
class kendaraan
{
	var $jumlahRoda;
	var $warna;
	var $bahanBakar;
	var $harga;
	var $merek;

	function statusHarga()
	{
		if($this->harga>50000000) $status='Mahal';
		else $status='Murah';
		return $status;
	}

	function setMerek($x)
	{
		$this->merek = $x;
	}

	function setHarga ($x)
	{
		$this->harga = $x;
	}
}

$kendaraan1 = new kendaraan();
$kendaraan1->setMerek('Yamaha Mio');
$kendaraan1->setharga(10000000);
echo 'Harga dari '.$kendaraan1->merek.' adalah Rp. '.$kendaraan1->harga;
echo "<br>";
echo "Kategori Motor : ";
echo $kendaraan1->statusHarga();

?>