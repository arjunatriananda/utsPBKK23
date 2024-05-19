<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kendaraan</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <header>
        <h1>Tambah Kendaraan</h1>
    </header>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="form_add_kendaraan.php">Tambah Kendaraan</a></li>
            <li><a href="list_kendaraan.php">Daftar Kendaraan</a></li>
        </ul>
    </nav>
    <div class="container">
        <h2>Tambah Kendaraan</h2>
        <form method="post" action="add_kendaraan.php">
            Pelanggan ID: <input type="number" name="pelanggan_id" required><br>
            Merk: <input type="text" name="merk" required><br>
            Model: <input type="text" name="model" required><br>
            Plat Nomor: <input type="text" name="plat_nomor" required><br>
            <input type="submit" value="Tambah">
        </form>
    </div>
    <footer>
        <p>&copy; 2023 Aplikasi Bengkel. All Rights Reserved.</p>
    </footer>
</body>
</html>
