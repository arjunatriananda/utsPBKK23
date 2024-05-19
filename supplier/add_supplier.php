<?php
include '../db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $kontak = $_POST['kontak'];

    $sql = "INSERT INTO Supplier (nama, kontak) VALUES ('$nama', '$kontak')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil ditambahkan. <a href='list_supplier.php'>Lihat daftar supplier</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
