<?php

class ContohStatic
{
    public static $angka = 1;

    public static function tambah()
    {
        return self::$angka++;
    }
}

echo ContohStatic::tambah() . "<br>";
echo ContohStatic::tambah() . "<br>";
