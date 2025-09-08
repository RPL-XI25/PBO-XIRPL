<?php
class dataPribadi
{
    // property
    public $namaLengkap;
    public $alamat;
    public $umur;
    public $email;

    // method
    public function setName($namaLengkap)
    {
        $this->namaLengkap = $namaLengkap;
    }
    public function setAlamat($alamat)
    {
        $this->alamat = $alamat;
    }
    public function setUmur($umur)
    {
        $this->umur = $umur;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }

    // get function
    public function getName()
    {
        return $this->namaLengkap;
    }
    public function getAlamat()
    {
        return $this->alamat;
    }
    public function getUmur()
    {
        return $this->umur;
    }
    public function getEmail()
    {
        return $this->email;
    }
}

// instansiasi class
$dataPribadi = new dataPribadi();

// set objek
$dataPribadi->setName('SMK Angkasa');
$dataPribadi->setAlamat('Halim Perdana Kusuma');
$dataPribadi->setUmur(17);
$dataPribadi->setEmail('smkangkasa@email.com');

echo $dataPribadi->getName();
echo $dataPribadi->getAlamat();
echo $dataPribadi->getUmur();
echo $dataPribadi->getEmail();
