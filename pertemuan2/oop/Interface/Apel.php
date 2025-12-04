<?php

require_once 'Buah.php';

class Apel implements Buah
{
    public function caraMakan()
    {
        echo "Apel dimakan dengan digigit.<br>";
    }
}
