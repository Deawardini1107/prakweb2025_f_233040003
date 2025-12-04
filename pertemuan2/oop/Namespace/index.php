<?php

require 'init.php';

use App\Service\User as UserService;
use App\Produk\User as UserProduk;

$s = new UserService();
$p = new UserProduk();

echo $s->info() . "<br>";
echo $p->info() . "<br>";
