<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pegawai</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <header>
        <h1>Tambah Pegawai</h1>
    </header>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="form_add_pegawai.php">Tambah Pegawai</a></li>
            <li><a href="list_pegawai.php">Daftar Pegawai</a></li>
        </ul>
    </nav>
    <div class="container">
        <h2>Tambah Pegawai</h2>
        <form method="post" action="add_pegawai.php">
            Nama: <input type="text" name="nama" required><br>
            Posisi: <input type="text" name="posisi" required><br>
            <input type="submit" value="Tambah">
        </form>
    </div>
    <footer>
        <p>&copy; 2023 Aplikasi Bengkel. All Rights Reserved.</p>
    </footer>
</body>
</html>
