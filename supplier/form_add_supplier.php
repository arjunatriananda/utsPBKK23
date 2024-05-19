<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pegawai</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <header>
        <h1>Daftar Pegawai</h1>
    </header>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="form_add_pegawai.php">Tambah Pegawai</a></li>
            <li><a href="list_pegawai.php">Daftar Pegawai</a></li>
        </ul>
    </nav>
    <div class="container">
        <h2>Daftar Pegawai</h2>
        <?php
        include '../db_connection.php';

        $sql = "SELECT * FROM Pegawai";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table><tr><th>ID</th><th>Nama</th><th>Posisi</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["id"]."</td><td>".$row["nama"]."</td><td>".$row["posisi"]."</td></tr>";
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
