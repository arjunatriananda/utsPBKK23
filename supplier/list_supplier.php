<!DOCTYPE html>
<html>
<head>
    <title>Daftar Supplier</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <header>
        <h1>Daftar Supplier</h1>
    </header>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="form_add_supplier.php">Tambah Supplier</a></li>
            <li><a href="list_supplier.php">Daftar Supplier</a></li>
        </ul>
    </nav>
    <div class="container">
        <h2>Daftar Supplier</h2>
        <?php
        include '../db_connection.php';

        $sql = "SELECT * FROM Supplier";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table><tr><th>ID</th><th>Nama</th><th>Kontak</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["id"]."</td><td>".$row["nama"]."</td><td>".$row["kontak"]."</td></tr>";
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
