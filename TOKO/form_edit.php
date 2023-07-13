<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="judul">
        <h1>shila_fashion </h1>
        <h2>jl.ponogoro no.100 ,Lombok Tengah Kode= 83551.</h2>
    </div>
    <br/>
    <a href="index.php">Lihat Semua Data Barang</a>
    <br/>
    <h3>Edit Data</h3>
    <?php
    include "koneksi.php";
    $id = $_GET['id'];
    $query_mysql = mysqli_query($koneksi,"SELECT * FROM barang WHERE id='$id'") or die(mysqli_error());
    while($data = mysqli_fetch_array($query_mysql)){
    ?>
    <form action="simpan_edit.php" method="post">
        <table>
        <tr>
                <td>Nama</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo 
                    $data['id'] ?>">
                    <input type="text" name="nama" value="<?php echo 
                    $data['nama'] ?>">
                </td>
        </tr>
        <tr>
                <td>Deskripsi</td>
                <td>
                    <input type="text" name="diskripsi" value="<?php echo $data['diskripsi'] ?>">
                </td>
        </tr>
        <tr>
                <td>Harga</td>
                <td>
                    <input type="text" name="harga" value="<?php echo $data['harga'] ?>">
                </td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td>
                <input type="text" name="jumlah" value="<?php echo $data['jumlah'] ?>">
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="simpan"></td>
        </tr>


        </table>
    </form>
    <?php } ?>
    </body>
</html>