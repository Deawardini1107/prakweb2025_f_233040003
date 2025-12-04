<?php

require_once 'init.php';

$komik = new Komik("One Piece", "Oda", 35000, 200);
echo $komik->getInfoProduk();
