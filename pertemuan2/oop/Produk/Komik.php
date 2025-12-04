<?php

require_once 'Produk.php';

class Komik extends Produk
{
    public $jumlahHalaman;

    public function __construct($judul, $penulis, $harga, $halaman)
    {
        parent::__construct($judul, $penulis, $harga);
        $this->jumlahHalaman = $halaman;
    }

    public function getInfoProduk()
    {
        return "Komik: " . parent::getInfoProduk() . " - {$this->jumlahHalaman} halaman";
    }
}
