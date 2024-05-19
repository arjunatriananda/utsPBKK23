<?php
include '../db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kontak = $_POST['kontak'];

    $sql = "INSERT INTO Customers (nama, alamat, kontak) VALUES ('$nama', '$alamat', '$kontak')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil ditambahkan. <a href='list_customer.php'>Lihat daftar customer</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
