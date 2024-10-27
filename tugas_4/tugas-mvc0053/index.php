<?php
/* P E N J E L A S A N
1. File index.php berfungsi sebagai entry point aplikasi.
2. Ini menginisialisasi koneksi ke database, memuat Controller, dan memanggil metode show() pada UserController untuk menampilkan 
informasi pengguna berdasarkan ID yang diterima dari URL.
*/
require_once 'app/config/database.php';
require_once 'app/controllers/UserController.php';

// Koneksi ke database
$dbConnection = getDBConnection();

// Mendapatkan parameter dari URL (misalnya: index.php?id=1)
$id = isset($_GET['id']) ? intval($_GET['id']) : 1;

// Membuat instance UserController
$controller = new UserController($dbConnection);

// Menampilkan data pengguna berdasarkan ID
$controller->show();

?>