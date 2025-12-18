<?php

// Enable error reporting untuk debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// routing sederhana
$controller = $_GET['controller'] ?? 'user';
$method     = $_GET['method'] ?? 'index';

// Cek apakah file controller ada
$controllerFile = "controllers/User.php";
if (!file_exists($controllerFile)) {
    die("Error: Controller file tidak ditemukan: " . $controllerFile);
}

require_once $controllerFile;

// Cek apakah class User ada
if (!class_exists('User')) {
    die("Error: Class User tidak ditemukan!");
}

$ctrl = new User();

// Jalankan method yang diminta
if (method_exists($ctrl, $method)) {
    $ctrl->$method();
} else {
    echo "<h2>Halaman tidak ditemukan!</h2>";
    echo "<p>Method '$method' tidak ada di controller '$controller'</p>";
    echo "<a href='index.php'>Kembali ke halaman utama</a>";
}
