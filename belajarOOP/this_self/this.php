<?php

class Scanner
{
    // property
    private $content;

    // method set
    public function setContent($data)
    {
        $this->content = $data;
    }
    // method print output
    public function printContent()
    {
        echo $this->content;
    }
}

$data = [
    'Scanner HP Hardware </br>',
    'Scanner EPSON Hardware </br>',
    'Scanner Samsung Hardware </br>',
    'Scanner Oppo Hardware </br>',
    'Scanner Infinix Hardware </br>',
    'Scanner Lenovo Hardware </br>',
    'Scanner Dell Hardware </br>',
    'Scanner Acer Hardware </br>',
    'Scanner Asus Hardware </br>',
    'Scanner Vivo Hardware </br>',
];

$jumlahData = count($data);
for ($i = 0; $i < $jumlahData; $i++) {
    $scanner[$i] = new Scanner();
    $scanner[$i]->setContent($data[$i]);
    $scanner[$i]->printContent();
}

// scanner kedua
// $scanner2 = new Scanner();
// $scanner2->setContent();
// $scanner2->printContent();

// scanner ketiga
// $scanner3 = new Scanner();
// $scanner3->setContent();
// $scanner3->printContent();
