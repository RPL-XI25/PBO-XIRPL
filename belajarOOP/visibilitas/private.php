<?php

class Bus
{
    private $kendaraan = 'Bus Double Decker';
    private $roda = 10;

    private function jalan()
    {
        echo 'Berjalan di tol jagorawi';
    }

    public function informasiKendaraan()
    {
        echo 'Kendaraan berjeniskan ' . $this->kendaraan . '</br>';
        echo 'Jumlah rodanya itu ' . $this->roda . '</br>';
        $this->jalan();
    }
}

$bus = new Bus();
$bus->informasiKendaraan();
