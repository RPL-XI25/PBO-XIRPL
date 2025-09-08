<?php
class PerangkatKeras
{
    public $nama_perangkat;
    private $merek_perangkat;
    protected $jumlah;

    public function setDataPerangkat($nama, $merek, $jumlah)
    {
        $this->nama_perangkat = $nama;
        $this->merek_perangkat = $merek;
        $this->jumlah = $jumlah;
    }

    public function getDataPerangkat()
    {
        echo 'Nama perangkat ' . $this->nama_perangkat . ', ';
        echo 'Merek perangkat ' . $this->merek_perangkat . ', ';
        echo 'Jumlah perangkat ' . $this->jumlah . '.';
    }
}

$perangkat = new PerangkatKeras();
$perangkat->setDataPerangkat('Komputer', 'Samsung', 20);
$perangkat->getDataPerangkat();

// $perangkat->merek_perangkat;
// $perangkat->jumlah;
echo $perangkat->nama_perangkat;

echo PHP_EOL;
