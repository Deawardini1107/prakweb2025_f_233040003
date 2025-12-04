<?php

require_once 'Buah.php';

class Jeruk implements Buah
{
    public function caraMakan()
    {
        echo "Jeruk dimakan setelah dikupas.<br>";
    }
}
