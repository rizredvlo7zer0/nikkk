<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='unnamed.png' rel='icon' type='image/x-icon'/>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto%3A300%2C400%2C500%2C700%2C400italic" rel="stylesheet">
	<title>NIK & KK GENERATOR</title>
	<style>
		@font-face {
font-family: x;
src: url(Ubuntu-Medium.ttf);
		}
		a,h2,label,h1,font,div {
			text-decoration:none;
			font-family: 'x';
		}
	</style>
</head>
<body>
	
<br>
<div class="w3-container w3-animate-left">
	<div class="w3-card-4 w3-white w3-bottombar w3-border-blue w3-hover-grayscale w3-round" style="width:100%">

	<center><a href="nik-kk.php"> <img src="unnamed.png" alt="ktp" class="w3-image w3-hover-sepia" style="width:150px;text-decoration:none"><br><b>NIK & KK GENERATOR</b></a></center>
	</div>
</div>
		<div class="w3-container w3-animate-left w3-section">
	<div class="w3-card-4 w3-bottombar w3-border-blue w3-round">
<center><b><br>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- adsense -->
<br>
<?php
//membuat koneksi ke database
$host = 'localhost:3306';
$user = 'u756821023_ocs';
$password = 'gorengan123';
$database = 'u756821023_ocs';

$konek_db = mysql_connect($host, $user, $password); 
$find_db = mysql_select_db($database) ;

// Perintah untuk menampilkan data
$hasil=MySQL_query ("Select * From ocs ORDER BY RAND() LIMIT 1") or die ("Invalid Query !!!");; //fungsi untuk SQL
while ($data = mysql_fetch_array ($hasil)){
$id = $data['id'];
echo " 
------------------------------</br>
NO KK : ".$data['kk']."</br>
NIK KTP : ".$data['nik']."</br>
------------------------------</br>
"; 
}
?>
	<br><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- adse