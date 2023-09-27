<?php
session_start();

// Periksa apakah pengguna sudah login atau belum
if (!isset($_SESSION['username'])) {
    header("Location: form_login.php"); // Jika belum login, arahkan ke halaman login
    exit;
}

// Ambil username dari session
$username = $_SESSION['username'];
?>


<head>
    <title>Halaman Admin</title>
</head>

<body>
    <h2>Selamat datang di  <?php echo $username; ?></h2>
    <p>Ini adalah halaman admin.</p>

    <a href="form_login.php">Logout</a> <!-- Tambahkan link untuk logout -->
</body>
