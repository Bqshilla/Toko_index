<?php
include 'koneksi.php';
$nama =$_POST['nama'];
$diskripsi = $_POST['diskripsi'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];
$ins = mysqli_query($koneksi,"Insert into barang (nama,diskripsi,harga,jumlah) 
values('$nama','$diskripsi','$harga','$jumlah')");

header("location:index.php?pesan=input");
?>