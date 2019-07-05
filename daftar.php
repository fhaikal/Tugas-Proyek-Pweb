<!DOCTYPE html>
<html>
<head>
	<title>TP</title>
	<link rel="stylesheet" type="text/css" href="gaya.css">
</head>
<body bgcolor="#3778c2">
	
	<ul class="mainnav">
		<li><img src="logo.png" width="55px"></li>
		<li><a href="index.html">Beranda</a></li>
		<li><a href="pinjam buku.html">Pinjam Buku</a></li>
		<li><a href="daftar.php">Daftar Peminjam</a></li>
		<li><a href="cari.html">Cari buku di Google</a></li>
		<li class="kanan"><a href="https://www.facebook.com">facebook</a></li>
	</ul>
	<div class="main">
		<h2>Daftar Peminjam Buku</h2> 
		<?php 
		$file = fopen("peminjam.txt", "r") or die("Tidak bisa membuka file!"); //membuka file 
			while (!feof($file)) {
				echo fgets($file)."<br>"; //mencetak string dari file
			}
		fclose($file);
 		?>
	</div>
</body>
</html>