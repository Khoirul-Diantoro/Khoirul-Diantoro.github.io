<?php 
error_reporting(0);
require 'koneksi.php';

	$Nama = $_POST['firstName'] ." " . $_POST['lastName'];
	$Email = $_POST['email'];
	$Username = $_POST['username'];
	$Alamat = $_POST['address'];
	$Komentar = $_POST['exampleFormControlTextarea1'];
	

	$query = "INSERT INTO masukkan VALUES ('','$Nama','$Email','$Komentar','$Username','$Alamat')";
		$result = mysqli_query($koneksi, $query);
		

	
		
	if (!$result) {
		die("Query Gagal dijalankan : " . mysqli_errno($koneksi)." - ". mysqli_error($koneksi));		
	}
	else {
		echo "<script>alert('Data Telah Ditambah'); window.location.href='contact.php' </script>";
		}
		
	


 ?>
