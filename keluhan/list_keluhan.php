<!DOCTYPE html>
<html>
<head>
    <title>Daftar Keluhan</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <header>
        <h1>Daftar Keluhan</h1>
    </header>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="form_add_keluhan.php">Tambah Keluhan</a></li>
            <li><a href="list_keluhan.php">Daftar Keluhan</a></li>
        </ul>
    </nav>
    <div class="container">
        <h2>Daftar Keluhan</h2>
        <?php
        include '../db_connection.php';

        $sql = "SELECT * FROM Keluhan";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table><tr><th>ID</th><th>Kendaraan ID</th><th>Deskripsi</th><th>Tanggal</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["id"]."</td><td>".$row["kendaraan_id"]."</td><td>".$row["deskripsi"]."</td><td>".$row["tanggal"]."</td></tr>";
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
