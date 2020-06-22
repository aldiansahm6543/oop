<?php 

// Kasus03.php 

include 'kasus02-class.php';

// parameter koneksi mysql
$host = 'localhost'; 
$user = 'root'; 
$pass = ''; 
$mydb = 'katalog'; 
// instantitasi dan setting properties obyek database
$db = new database($host, $user, $pass, $mydb); 
// koneksi ke MySQL via method
$db->connectMySQL(); 
// insert data buku via method 
echo "<br>";
$db->addBuku('Pemrograman OOP di PHP', 'Rosihan Ari Yuana', 'Penerbit
Sendiri', '2012'); 
?> 
