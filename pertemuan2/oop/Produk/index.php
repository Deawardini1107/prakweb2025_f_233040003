<?php

require_once 'Komik.php';
require_once 'Game.php';

$komik = new Komik("Naruto", "Masashi Kishimoto", 30000, 100);
$game  = new Game("GTA V", "Rockstar", 250000, 50);

echo $komik->getInfoProduk() . "<br>";
echo $game->getInfoProduk() . "<br>";

?>
