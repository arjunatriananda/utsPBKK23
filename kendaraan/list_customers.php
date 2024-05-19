<!DOCTYPE html>
<html>
<head>
    <title>Daftar Kendaraan</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <header>
        <h1>Daftar Kendaraan</h1>
    </header>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="form_add_kendaraan.php">Tambah Kendaraan</a></li>
            <li><a href="list_kendaraan.php">Daftar Kendaraan</a></li>
        </ul>
    </nav>
    <div class="container">
        <h2>Daftar Kendaraan</h2>
        <?php
        include '../db_connection.php';

        $sql = "SELECT * FROM Kendaraan";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table><tr><th>ID</th><th>Pelanggan ID</th><th>Merk</th><th>Model</th><th>Plat Nomor</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["id"]."</td><td>".$row["pelanggan_id"]."</td><td>".$row["merk"]."</td><td>".$row["model"]."</td><td>".$row["plat_nomor"]."</td></tr>";
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
