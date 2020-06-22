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
$kendaraan1 = new kendaraan();
$kendaraan1->merek ='Yamaha Mio';
$kendaraan1->harga = 10000000;
$kendaraan2 = new kendaraan();
$kendaraan2->merek ='Toyota Yaris';
$kendaraan2->jumlahRoda = 4;
$kendaraan2->harga = 160000000;
$kendaraan2->warna ='Merah';
$kendaraan2->bahanBakar ='Premium'; 
$kendaraan3 = new kendaraan();
$kendaraan3->merek ='Honda Scoopy';
$kendaraan3->jumlahRoda = 2;
$kendaraan3->harga = 13000000;
$kendaraan3->warna ='Putih';
$kendaraan3->bahanBakar ='Premium';
$kendaraan4 = new kendaraan();
$kendaraan4->merek ='Isuzu Panther';
$kendaraan4->jumlahRoda = 4;
$kendaraan4->harga = 170000000;
$kendaraan4->warna ='Hitam';
$kendaraan4->bahanBakar ='Solar';

//Tampilkan
echo $kendaraan1->statusHarga();
echo $kendaraan2->statusHarga();
echo $kendaraan3->statusHarga();
echo $kendaraan4->statusHarga();

?>