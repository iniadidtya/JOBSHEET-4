<?php
include 'koneksi.php';

if(isset($_POST['submit'])){
    $id_kapal = $_POST['id_kapal'];
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $asal = $_POST['asal'];
    $tujuan = $_POST['tujuan'];
    $tanggal = $_POST['tanggal'];
    $keterangan = $_POST['keterangan'];

    $query = "INSERT INTO tkapal (id_kapal, kode, nama, asal, tujuan, tanggal, keterangan) VALUES ('$id_kapal', '$kode', '$nama', '$asal', '$tujuan', '$tanggal', '$keterangan')";
    mysqli_query($conn, $query);

    header("Location: index.php"); // Redirect kembali ke halaman utama setelah data ditambahkan
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Kapal</title>
</head>
<body>

<h2>Tambah Data Kapal</h2>

<!-- Form untuk menambahkan data kapal -->
<form method="post" action="">
    <label for="id_kapal">ID Kapal:</label>
    <input type="text" name="id_kapal" required>
    <label for="kode">Kode:</label>
    <input type="text" name="kode" required>
    <label for="nama">Nama:</label>
    <input type="text" name="nama" required>
    <label for="asal">Asal:</label>
    <input type="text" name="asal" required>
    <label for="tujuan">Tujuan:</label>
    <input type="text" name="tujuan" required>
    <label for="tanggal">Tanggal:</label>
    <input type="date" name="tanggal" required>
    <label for="keterangan">Keterangan:</label>
    <input type="text" name="keterangan" required>
    <button type="submit" name="submit">Tambah</button>
</form>

</body>
</html>