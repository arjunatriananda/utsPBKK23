<?php
include '../db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kendaraan_id = $_POST['kendaraan_id'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal = $_POST['tanggal'];

    $sql = "INSERT INTO Keluhan (kendaraan_id, deskripsi, tanggal) VALUES ('$kendaraan_id', '$deskripsi', '$tanggal')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil ditambahkan. <a href='list_keluhan.php'>Lihat daftar keluhan</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
