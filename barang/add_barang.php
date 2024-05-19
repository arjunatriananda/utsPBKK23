<?php
include '../db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_barang = $_POST['nama_barang'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];

    $sql = "INSERT INTO Barang (nama_barang, stok, harga) VALUES ('$nama_barang', '$stok', '$harga')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil ditambahkan. <a href='list_barang.php'>Lihat daftar barang</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
