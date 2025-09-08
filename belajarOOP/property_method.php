<?php

class Mobil
{
    // property
    public $type = 'pickup ';
    public $roda = 8;

    // method
    public function jalan()
    {
        echo 'test';
    }
}

// instansiasi class
$kendaraan = new Mobil();

echo $kendaraan->type;
echo $kendaraan->roda;
echo $kendaraan->jalan();
