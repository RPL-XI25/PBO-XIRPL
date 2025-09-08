<?php

class Singa
{
    public static $kaki = 4;

    // public static function lari()
    // {
    //     echo ' Singa di hutan itu berlari';
    // }

    // nama class
    // static
    // self
    public function kaki1()
    {
        echo Singa::$kaki;
    }
    public function kaki2()
    {
        echo static::$kaki;
    }
    public function kaki3()
    {
        echo self::$kaki;
    }
}

$hewan = new Singa();
$hewan->kaki1();
$hewan->kaki2();
$hewan->kaki3();

// echo Singa::$kaki;
// echo Singa::lari();
