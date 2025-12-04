<?php

require_once 'Animal.php';

class Cat extends Animal
{
    public function run()
    {
        echo "Kucing berlari cepat!<br>";
    }
}

$cat = new Cat();
$cat->run();
