<?php

// routing sederhana
$controller = $_GET['controller'] ?? 'user';
$method     = $_GET['method'] ?? 'index';

require_once "controllers/User.php";

$ctrl = new User();

if (method_exists($ctrl, $method)) {
    $ctrl->$method();
} else {
    echo "Halaman tidak ditemukan!";
}
