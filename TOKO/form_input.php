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
        <h1>Toko </h1>
        <h2>jl.kemboja no.24 praya,Lombok Tengah Kode= 83555.</h2>
    </div>
    <br/>
    <a href="index.php">Lihat Semua Data Barang</a>
    <br/>
    <h3>Input Data Baru</h3>
    <form action="simpan_input.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" ></td>
            </tr>
            <tr>
                <td>Diskripsi</td>
                <td><input type="text" name="diskripsi" ></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><input type="text" name="jumlah"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>