<?php
include "koneksi.php";



$merk = $_POST['merk'];
$tipe = $_POST['tipe'];
$tahun = $_POST['tahun'];

$query = "insert INTO hp SET merk = '$merk', tipe = '$tipe', tahun = '$tahun'";

// mysqli_query($koneksi, $query);
// or die ("Gagal Perintah SQL".mysqli_error());
// header('location:index.php');

$cek = mysqli_query($koneksi, $query);

if($cek === TRUE){
	echo "<script>";
	echo "alert('Data Berhasil Ditambahkan!');";
	echo "window.location.href = 'index.php'";
	echo "</script>";

} else {
	echo "<script> window.location.href = '#' </script>";
}

?>

