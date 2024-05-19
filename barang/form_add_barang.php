<!DOCTYPE html>
<html>
<head>
    <title>Tambah Barang</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <header>
        <h1>Tambah Barang</h1>
    </header>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="form_add_barang.php">Tambah Barang</a></li>
            <li><a href="list_barang.php">Daftar Barang</a></li>
        </ul>
    </nav>
    <div class="container">
        <h2>Tambah Barang</h2>
        <form method="post" action="add_barang.php">
            Nama Barang: <input type="text" name="nama_barang" required><br>
            Stok: <input type="number" name="stok" required><br>
            Harga: <input type="text" name="harga" required><br>
            <input type="submit" value="Tambah">
        </form>
    </div>
    <footer>
        <p>&copy; 2023 Aplikasi Bengkel. All Rights Reserved.</p>
    </footer>
</body>
</html>
