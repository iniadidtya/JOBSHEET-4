<?php
    // Koneksi ke database
    include 'koneksi.php';

    // Query untuk mengambil semua data dari tabel tkapal
    $query = "SELECT * FROM tkapal";
    $result = mysqli_query($conn, $query);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Kapal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        a {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            text-decoration: none;
            color: #fff;
            background-color: #4caf50;
            border-radius: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #4caf50;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .delete-btn {
            color: #fff;
            background-color: #f44336;
            padding: 5px 10px;
            border-radius: 3px;
            text-decoration: none;
        }

        .delete-btn:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>
 

    <h2>Data Kapal</h2>
    <a href="create.php">Tambah Data</a>
    <table>
        <tr>
            <th>ID Kapal</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Asal</th>
            <th>Tujuan</th>
            <th>Tanggal</th>
            <th>Keterangan</th>
            <th>Action</th>
        </tr>

        <?php
        // Tampilkan data dalam bentuk tabel
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id_kapal'] . "</td>";
                echo "<td>" . $row['kode'] . "</td>";
                echo "<td>" . $row['nama'] . "</td>";
                echo "<td>" . $row['asal'] . "</td>";
                echo "<td>" . $row['tujuan'] . "</td>";
                echo "<td>" . $row['tanggal'] . "</td>";
                echo "<td>" . $row['keterangan'] . "</td>";
                echo "<td>
                    <a href='update.php?id_kapal=" . $row['id_kapal'] . "'>Edit</a> |
                    <a href='delete.php?id_kapal=" . $row['id_kapal'] . "' class='delete-btn' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data?\")'>Delete</a>
                    </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='8'>Tidak ada data</td></tr>";
        }
        ?>
    </table>
</body>
</html>
