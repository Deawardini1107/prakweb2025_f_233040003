<?php

class Produk 
{
    protected $judul;
    protected $penulis;
    protected $harga;

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
