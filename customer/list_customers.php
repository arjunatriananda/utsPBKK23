<!DOCTYPE html>
<html>
<head>
    <title>Daftar Customer</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <header>
        <h1>Daftar Customer</h1>
    </header>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="form_add_customer.php">Tambah Customer</a></li>
            <li><a href="list_customer.php">Daftar Customer</a></li>
        </ul>
    </nav>
    <div class="container">
        <h2>Daftar Customer</h2>
        <?php
        include '../db_connection.php';

        $sql = "SELECT * FROM Customers";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table><tr><th>ID</th><th>Nama</th><th>Alamat</th><th>Kontak</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["id"]."</td><td>".$row["nama"]."</td><td>".$row["alamat"]."</td><td>".$row["kontak"]."</td></tr>";
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
