<?php
include 'koneksi.php';

// Proses penghapusan data jika ID kapal sudah diberikan
if(isset($_GET['id_kapal'])){
    $id_kapal = $_GET['id_kapal'];
    
    // Query untuk menghapus data kapal berdasarkan ID
    $query_delete = "DELETE FROM tkapal WHERE id_kapal='$id_kapal'";
    mysqli_query($conn, $query_delete);
    
    // Redirect kembali ke halaman utama setelah data dihapus
    header("Location: index.php");
    exit();
}

// Jika ID kapal tidak diberikan, kembali ke halaman utama
header("Location: index.php");
exit();
?>