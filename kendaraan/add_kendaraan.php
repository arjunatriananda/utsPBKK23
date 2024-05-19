<?php
include '../db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pelanggan_id = $_POST['pelanggan_id'];
    $merk = $_POST['merk'];
    $model = $_POST['model'];
    $plat_nomor = $_POST['plat_nomor'];

    $sql = "INSERT INTO Kendaraan (pelanggan_id, merk, model, plat_nomor) VALUES ('$pelanggan_id', '$merk', '$model', '$plat_nomor')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil ditambahkan. <a href='list_kendaraan.php'>Lihat daftar kendaraan</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
