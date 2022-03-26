<?php 
$host = "localhost";
$user = "root";
$password = "";
$dbname = "kuliah";

$koneksi = mysql_connect($host, $user, $password, $dbname)

if (!$koneksi) {
	echo "koneksi gagal";
}
else{
 echo"koneksi berhasil"; }
 ?>
