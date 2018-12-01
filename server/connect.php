<?php
$username='postgres';
	$password='123';
	$url='localhost';
	$port=5432;
	$dbname='lahan2';
	
	$conn = pg_connect("host=".$url." port=".$port." dbname=".$dbname." user=".$username." password=".$password) or die("Gagal");
	if ($conn)
	{
		// echo "Koneksi Sukses";
	}
	else
	{
		echo "Koneksi Gagal";
	}

?>