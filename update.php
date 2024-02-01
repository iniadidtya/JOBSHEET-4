<?php
include 'koneksi.php';

// Periksa apakah parameter id_kapal ada dan merupakan angka
if (!isset($_GET['id_kapal']) || !is_numeric($_GET['id_kapal'])) {
    // Jika parameter tidak ditemukan atau bukan angka, maka arahkan kembali ke halaman utama
    header("Location: index.php");
    exit();
}

// Fungsi untuk membersihkan input pengguna
function clean_input($data) {
    global $conn;
    return mysqli_real_escape_string($conn, htmlspecialchars(strip_tags($data)));
}

// Ambil ID kapal dari parameter URL
$id_kapal = $_GET['id_kapal'];

// Ambil data kapal yang akan diupdate dari database
$query_select = "SELECT * FROM tkapal WHERE id_kapal=$id_kapal";
$result = mysqli_query($conn, $query_select);

// Periksa apakah data ditemukan
if (mysqli_num_rows($result) <= 0) {
    // Jika data tidak ditemukan, maka arahkan kembali ke halaman utama
    header("Location: index.php");
    exit();
}

$row = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {
    // Bersihkan input sebelum digunakan dalam query
    $id_kapal = clean_input($_POST['id_kapal']);
    $kode = clean_input($_POST['kode']);
    $nama = clean_input($_POST['nama']);
    $asal = clean_input($_POST['asal']);
    $tujuan = clean_input($_POST['tujuan']);
    $tanggal = clean_input($_POST['tanggal']);
    $keterangan = clean_input($_POST['keterangan']);

    // Query untuk mengupdate data kapal
    $query_update = "UPDATE tkapal SET kode='$kode', nama='$nama', asal='$asal', tujuan='$tujuan', tanggal='$tanggal', keterangan='$keterangan' WHERE id_kapal=$id_kapal";
    mysqli_query($conn, $query_update);

    // Redirect kembali ke halaman utama setelah data diupdate
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Kapal</title>
</head>
<body>

<h2>Edit Data Kapal</h2>

<form method="post" action="">
<label for="id_kapal">ID Kapal:</label>
<input type="text" name="id_kapal" value="<?php echo $row['id_kapal']; ?>" required>
    <label for="kode">Kode:</label>
    <input type="text" name="kode" value="<?php echo $row['kode']; ?>" required>
    <label for="nama">Nama:</label>
    <input type="text" name="nama" value="<?php echo $row['nama']; ?>" required>
    <label for="asal">Asal:</label>
    <input type="text" name="asal" value="<?php echo $row['asal']; ?>" required>
    <label for="tujuan">Tujuan:</label>
    <input type="text" name="tujuan" value="<?php echo $row['tujuan']; ?>" required>
    <label for="tanggal">Tanggal:</label>
    <input type="date" name="tanggal" value="<?php echo $row['tanggal']; ?>" required>
    <label for="keterangan">Keterangan:</label>
    <input type="text" name="keterangan" value="<?php echo $row['keterangan']; ?>" required>
    <button type="submit" name="submit">Update</button>
</form>

</body>
</html>