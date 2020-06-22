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
}

$kendaraan1 = new kendaraan();
$kendaraan2 = new kendaraan;
$kendaraan3 = new kendaraan();

?>