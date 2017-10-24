<!DOCTYPE html>
<html>
<head>
	<title>ALI ILHAM</title>
</head>
<body>
<?php
require_once 'coba.php';
$manusia = new motor('HONDA','MERAH','RP:1.000.000','200 CC');
 	echo "<center>mereknya : ".$manusia->get_merek();
 	echo "<br>warna Nya : ".$manusia->get_warna();
 	echo "<br>harganya: ".$manusia->get_harga();
 	echo "<br>CC Nya : ".$manusia->get_cc();
 	echo "<br>";
?>
</body>
</html>