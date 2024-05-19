<!DOCTYPE html>
<html>
<head>
    <title>Daftar Barang</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <header>
        <h1>Daftar Barang</h1>
    </header>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="form_add_barang.php">Tambah Barang</a></li>
            <li><a href="list_barang.php">Daftar Barang</a></li>
        </ul>
    </nav>
    <div class="container">
        <h2>Daftar Barang</h2>
        <?php
        include '../db_connection.php';

        $sql = "SELECT * FROM Barang";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table><tr><th>ID</th><th>Nama Barang</th><th>Stok</th><th>Harga</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["id"]."</td><td>".$row["nama_barang"]."</td><td>".$row["stok"]."</td><td>".$row["harga"]."</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }

        $conn->close();
        ?>
    </div>
    <footer>
        <p>&copy; 2023 Aplikasi Bengkel. All Rights Reserved.</p>
    </footer>
</body>
</html>
