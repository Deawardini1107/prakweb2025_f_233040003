<?php

class Rumah 
{
    // Property
    public $warna;
    public $jumlahKamar;
    public $alamat;

    // Constructor
    public function __construct($warna, $kamar, $alamat)
    {
        $this->warna = $warna;
        $this->jumlahKamar = $kamar;
        $this->alamat = $alamat;
    }

    // Method
    public function kunciPintu()
    {
        echo "Pintu rumah dikunci.<br>";
    }

    public function infoRumah()
    {
        return "Rumah warna {$this->warna}, jumlah kamar {$this->jumlahKamar}, beralamat di {$this->alamat}.<br>";
    }
}

// ======================
// Object
// ======================
$rumah1 = new Rumah("Biru", 3, "Jl. Mawar No.10");
echo $rumah1->infoRumah();
$rumah1->kunciPintu();

// ======================
// Object Type Example
// ======================
function pasangListrik(Rumah $r)
{
    echo "Pemasangan listrik untuk rumah di: {$r->alamat}<br>";
}

pasangListrik($rumah1);

?>
