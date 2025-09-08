<?php

class Buku {
    // Property
    public $judulBuku;
    public $namaPenulis;

    public function __construct($judul, $penulis)
    {
        $this->judulBuku = $judul;
        $this->namaPenulis = $penulis;
    }

    // Method untuk menampilkan informasi buku
    public function tampilkanInformasi()
    {
        echo "Judul: $this->judulBuku<br>";
        echo "Penulis: $this->namaPenulis<br>";
    }
}

$buku1 = new Buku("Laskar Pelangi", "Andrea Hirata", 2005, 'Jakarta');
$buku2 = new Buku("Negeri 5 Menara", "Ahmad Fuadi", 2009, 'Jakarta');

// data informasi buku
$buku1->tampilkanInformasi();
echo "<hr>";
$buku2->tampilkanInformasi();
echo "<hr>";

?>
