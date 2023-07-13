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
        <h1>shila_fashion</h1>
        <h2>jl.ponogoro no.100 ,Lombok Tengah Kode= 83551.</h2>
    </div>
    <br/>
    <?php
    if(isset($_GET['pesan'])){
        $pesan = $_GET['pesan'];
        if($pesan == "input"){
            echo "Data Berhasil Di Input.";
        }elseif ($pesan == "update"){
            echo "Data Berhasil di Update.";
        }elseif ($pesan == "hapus") {
            echo "Data Berhasil di Hapus";
        }
    }
    ?>
    <br/>
    <a class="tombol" href="form_input.php">+Tambah Data Baru</a>
    <h3>Data Barang</h3>
    <table border="2" class="table" >
        <tr>
            <th>No</th>
            <th>Nama </th>
            <th>Diskripsi</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>pilih</th>

        </tr>
        <?php 
        include "koneksi.php";
        $query_mysql = mysqli_query($koneksi,"SELECT * FROM barang")or
                        die(mysqli_error($koneksi));
        $nomor = 1;
        while($data = mysqli_fetch_array($query_mysql)){
        ?>
        <tr>
            <td><?php echo $nomor++ ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['diskripsi']; ?></td>
            <td><?php echo $data['harga']; ?></td>
            <td><?php echo $data['jumlah']; ?></td>
            <td>
                <a href="form_edit.php?id=<?php echo $data['id']; ?>">Edit</a> ||
                <a href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>