<?php
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$deskripsi = $_POST['diskripsi'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

mysqli_query($koneksi,"UPDATE barang SET nama='$nama',diskripsi='$diskripsi',harga='$harga',jumlah=$jumlah WHERE id='$id'");

header("location:index.php?pesan=edit");
?>