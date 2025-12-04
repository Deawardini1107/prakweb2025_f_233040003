<?php

require_once 'Produk.php';

class Game extends Produk
{
    public $waktuMain;

    public function __construct($judul, $penulis, $harga, $waktu)
    {
        parent::__construct($judul, $penulis, $harga);
        $this->waktuMain = $waktu;
    }

    public function getInfoProduk()
    {
        return "Game: " . parent::getInfoProduk() . " - {$this->waktuMain} jam";
    }
}
