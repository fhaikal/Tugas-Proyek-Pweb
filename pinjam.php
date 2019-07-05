<?php 
	if(isset($_POST["nama"])&& isset($_POST["nim"])&& isset($_POST["email"])&& isset($_POST["prodi"])){
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$email = $_POST['email'];
		$prodi = $_POST['prodi'];
	}
	$pinjam = fopen("peminjam.txt", "a");
	$tgl = date("d/m/Y")."  -  "; //memasukkan tanggal dari sistem ke variabel  
	$t1 = $nama."  -  ";
	$t2 = $nim."  -  ";
	$t3 = $email."  -  ";
	$t4 = $prodi."\n";
	fwrite($pinjam, $tgl);
	fwrite($pinjam, $t1);
	fwrite($pinjam, $t2);
	fwrite($pinjam, $t3);
	fwrite($pinjam, $t4);
	fclose($pinjam);
 ?>