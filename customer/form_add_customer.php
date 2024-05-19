<!DOCTYPE html>
<html>
<head>
    <title>Tambah Customer</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <header>
        <h1>Tambah Customer</h1>
    </header>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="form_add_customer.php">Tambah Customer</a></li>
            <li><a href="list_customer.php">Daftar Customer</a></li>
        </ul>
    </nav>
    <div class="container">
        <h2>Tambah Customer</h2>
        <form method="post" action="add_customer.php">
            Nama: <input type="text" name="nama" required><br>
            Alamat: <input type="text" name="alamat" required><br>
            Kontak: <input type="text" name="kontak" required><br>
            <input type="submit" value="Tambah">
        </form>
    </div>
    <footer>
        <p>&copy; 2023 Aplikasi Bengkel. All Rights Reserved.</p>
    </footer>
</body>
</html>
