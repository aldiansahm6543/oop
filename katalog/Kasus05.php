<?php 
include 'kasus02-class.php';
// parameter koneksi mysql
$host = 'localhost'; 
$user = 'root'; 
$pass = ''; 
$mydb = 'katalog'; 
// instantitasi dan setting properties obyek database
$db = new database($host, $user, $pass, $mydb); 
$db->connectMySQL();
// proses hapus data 
if (isset($_GET['op'])) 
{ 
if ($_GET['op'] == 'del') 
{ 
// baca ID dari parameter ID buku yang akan dihapus
$id = $_GET['id']; 
// proses hapus data buku berdasarkan ID via method
$db->hapusBuku($id); 
} 
} 
// tampilkan semua data buku
$db->tampilBuku(); 
?> 
