<?php
class database{
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "malasngoding";
 
	function __construct(){
		$this->koneksi = new mysqli($this->host, $this->uname, $this->pass, $this->db);
		/*if($this->koneksi){
			echo "Koneksi database mysql dan php berhasil.";
		}else{
			echo "Koneksi database mysql dan php GAGAL !";
		}*/
	}
	function tampil_data(){
		$data = $this->koneksi->query("select * from user");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	function input($nama,$alamat,$usia){
		$this->koneksi->query("insert into user values('','$nama','$alamat','$usia')");
	}
	function hapus($id){
		$this->koneksi->query("delete from user where id='$id'");
	}
	function edit($id){
		$data = $this->koneksi->query("select * from user where id='$id'");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	function update($id,$nama,$alamat,$usia){
		$this->koneksi->query("update user set nama='$nama', alamat='$alamat', usia='$usia' where id='$id'");
	}
} 
?>