<?php

class Lingkaran
{
    public const PI = 3.14;

    public function luas($jari)
    {
        $hasilJari = $jari * $jari;
        echo 'Hasil : ' . self::PI * $hasilJari;
    }
}

$lingkaran = new Lingkaran;
echo 'PI : ' . $lingkaran::PI . '</br>';
echo $lingkaran->luas(8);
