<?php
class dataPribadi
{
    public $namaLengkap;
    public $alamat;
    public $umur;
    public $email;

    public function setDataPribadi($namaLengkap, $alamat, $umur, $email)
    {
        $this->namaLengkap = $namaLengkap;
        $this->alamat = $alamat;
        $this->umur = $umur;
        $this->email = $email;
    }

    // get function
    public function getDataPribadi()
    {
        return 'Nama saya ' . $this->namaLengkap . ', alamat di ' . $this->alamat . ' usianya ' . $this->umur . ' emailnya ' . $this->email;
    }
}

// instansiasi class
$dataPribadi = new dataPribadi();

// set objek
$dataPribadi->setDataPribadi('SMK Angkasa', 'Jakarta', 20, 'angkasa@email.com');
echo $dataPribadi->getDataPribadi();

// echo $dataPribadi->getAlamat();
// echo $dataPribadi->getUmur();
// echo $dataPribadi->getEmail();
