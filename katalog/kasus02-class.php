 
<?php

//kasus02-class.php

class database 
{ 
// properties 
private $dbHost;
private $dbUser;
private $dbPass;
private $dbName;
public $conn;

// constructor 
function __construct($a, $b, $c, $d)
{ 
$this->dbHost = $a; 
$this->dbUser = $b; 
$this->dbPass = $c; 
$this->dbName = $d; 
} 

// method koneksi mysql 
function connectMySQL() 
{ 
	$this->conn= new mysqli($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
	if ($this->conn->connect_errno) {
		echo "Datasbase Tidak Ada";
		exit;
	}
	echo "Koneksi Berhasil";
		//mysql_select_db($this->dbName); 
} 

// function add buku
function addBuku($judul, $pengarang, $penerbit, $thnTerbit) 
{ 
$query = "INSERT INTO buku (judul, pengarang, penerbit, tahunTerbit) 
VALUES ('$judul', '$pengarang', '$penerbit', '$thnTerbit')";
$hasil = $this->conn->query($query); 
if ($hasil) echo "Data buku sudah disimpan ke DB"; 
else echo "Data buku gagal disimpan ke DB"; 
} 

// Function tampil buku
function tampilBuku() 
{ 
echo "<table border='1'>"; 
echo "<tr><th>No</th><th>Judul 
Buku</th><th>Pengarang</th><th>Penerbit</th><th>Tahun
Terbit</th><th>Action</th></tr>"; 
// query untuk menampilkan semua data buku 
$query = "SELECT * FROM buku ORDER BY id"; 
$hasil = $this->conn->query($query); 
$i = 1; 
while ($data = mysqli_fetch_array($hasil)) 
{ 
echo 
"<tr><td>".$i."</td><td>".$data['judul']."</td><td>".$data['pengarang']."</td
><td>".$data['penerbit']."</td><td>".$data['tahunTerbit']."</td><td><a 
href='".$_SERVER['PHP_SELF']."?op=edit&id=".$data['id']."'>Edit</a> | <a 
href='".$_SERVER['PHP_SELF']."?op=del&id=".$data['id']."'>Hapus</a></td></tr>
"; 
$i++; 
} 
echo "</table>";
}


// Function Hapus Buku
function hapusBuku($id) 
{ 
$query = "DELETE FROM buku WHERE id = '$id'";
$this->conn->query($query); 
echo "Data buku ID ".$id." sudah dihapus"; 
}


//


}

?>
