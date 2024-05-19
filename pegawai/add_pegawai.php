<?php
include '../db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $posisi = $_POST['posisi'];

    $sql = "INSERT INTO Pegawai (nama, posisi) VALUES ('$nama', '$posisi')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil ditambahkan. <a href='list_pegawai.php'>Lihat daftar pegawai</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
