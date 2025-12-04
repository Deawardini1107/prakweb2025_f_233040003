<?php

class Game extends Produk
{
    public $waktuMain;

    public function __construct($judul, $penulis, $harga, $waktuMain)
    {
        parent::__construct($judul, $penulis, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk()
    {
        return "Game: " . parent::getInfoProduk() . " - {$this->waktuMain} jam";
    }
}
