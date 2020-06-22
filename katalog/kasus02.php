<?php 

//kasus02.php 

include 'kasus02-class.php';
// parameter koneksi mysql
$host = 'localhost'; 
$user = 'root'; 
$pass = ''; 
$mydb = 'katalog'; 
// instantitasi dan setting properties obyek database
$db = new database($host, $user, $pass, $mydb); 
// koneksi ke mysql via method
$db->connectMySQL(); 
?>
