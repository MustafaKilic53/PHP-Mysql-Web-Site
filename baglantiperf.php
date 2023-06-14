<?php

$servername="localhost";
$username="root";
$password="";
$database="performanshastane";

try {
	$baglanti=mysqli_connect($servername,$username,$password,$database);
	echo " ";
	
} catch (Exception $e) {
	echo "bağlantı hatası var";
	
}

?>