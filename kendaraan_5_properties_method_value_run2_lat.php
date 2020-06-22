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

	function setHarga($x)
	{
		$this->harga = $x;
	}

	function setJumlahroda($x)
	{
		$this->jumlahRoda = $x;
	}

	function setWarna($x)
	{
		$this->warna = $x;
	}

	function setBahanbakar($x)
	{
		$this->bahanBakar = $x;
	}

	function bacaJumlahroda()
	{
		return $this->jumlahRoda;
	}

	function bacaWarna()
	{
		return $this->warna;
	}

	function bacaBahanbakar()
	{
		return $this->bahanBakar;
	}

	function bacaMerek()
	{
		return $this->merek;
	}

	function bacaHarga()
	{
		return $this->harga;
	}
}

$kendaraan1 = new kendaraan();
$kendaraan1->setMerek('Yamaha Mio');
$kendaraan1->setharga(10000000);
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
echo 'Harga dari '.$kendaraan1->bacaMerek().' adalah Rp. '.$kendaraan1->bacaHarga();
echo "<br>";
echo "Kategori Kendaraan : ";
echo $kendaraan1->statusHarga();
echo "<br>";
echo "<br>";

echo 'Harga dari '.$kendaraan2->bacaMerek().' adalah Rp. '.$kendaraan2->bacaHarga().' Jumlah Roda nya : '.$kendaraan2->bacaJumlahroda().' dengan Warna nya : '.$kendaraan2->bacaWarna().' Bahan Bakarnya adalah : '.$kendaraan2->bacaBahanbakar();
echo "<br>";
echo "Kategori Kendaraan : ";
echo $kendaraan2->statusHarga();
echo "<br>";
echo "<br>";

echo 'Harga dari '.$kendaraan3->bacaMerek().' adalah Rp. '.$kendaraan3->bacaHarga();
echo "<br>";
echo "Kategori Kendaraan : ";
echo $kendaraan3->statusHarga();
echo "<br>";
echo "<br>";

echo 'Harga dari '.$kendaraan4->bacaMerek().' adalah Rp. '.$kendaraan4->bacaHarga();
echo "<br>";
echo "Kategori Kendaraan : ";
echo $kendaraan4->statusHarga();

?>