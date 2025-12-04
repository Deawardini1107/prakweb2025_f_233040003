<?php

class Produk
{
    public $judul;
    public $penulis;
    public $harga;

    public function __construct($judul, $penulis, $harga)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->harga = $harga;
    }

    public function getInfoProduk()
    {
        return "{$this->judul} | {$this->penulis} (Rp {$this->harga})";
    }
}
