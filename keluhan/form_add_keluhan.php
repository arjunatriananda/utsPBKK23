<!DOCTYPE html>
<html>
<head>
    <title>Tambah Keluhan</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <header>
        <h1>Tambah Keluhan</h1>
    </header>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="form_add_keluhan.php">Tambah Keluhan</a></li>
            <li><a href="list_keluhan.php">Daftar Keluhan</a></li>
        </ul>
    </nav>
    <div class="container">
        <h2>Tambah Keluhan</h2>
        <form method="post" action="add_keluhan.php">
            Kendaraan ID: <input type="number" name="kendaraan_id" required><br>
            Deskripsi: <textarea name="deskripsi" required></textarea><br>
            Tanggal: <input type="date" name="tanggal" required><br>
            <input type="submit" value="Tambah">
        </form>
    </div>
    <footer>
        <p>&copy; 2023 Aplikasi Bengkel. All Rights Reserved.</p>
    </footer>
</body>
</html>
