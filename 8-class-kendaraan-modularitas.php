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

?>