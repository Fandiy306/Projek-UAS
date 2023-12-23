<?php
include('config.php');
// Start a session
session_start();

// Periksa apakah pengguna sudah masuk
if (!isset($_SESSION['user_id'])) {
    // Alihkan ke halaman login jika belum masuk
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// Jika pengguna mengklik tautan logout
if (isset($_GET['logout'])) {
    // Hancurkan sesi
    session_destroy();

    // Alihkan ke halaman login setelah logout
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Halaman Anda</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Gaya untuk tombol logout */
        .logout-btn {
            display: inline-block;
            padding: 10px 15px;
            background-color: #e74c3c;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
            cursor: pointer; /* Tambahkan kursor pointer untuk menunjukkan tindakan dapat di-klik */
        }

        .logout-btn:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Konten HTML Anda -->

    <!-- Tombol Logout -->
    <a onclick="confirmLogout()" class="logout-btn">Logout</a>

    <script>
        function confirmLogout() {
            // Tampilkan konfirmasi dengan JavaScript
            var confirmLogout = confirm("Apakah Anda yakin ingin keluar?");
            if (confirmLogout) {
                window.location.href = "login.php";
            }
        }
    </script>
</div>

</body>
</html>
