<?php

class Orang{
    // property
    public $nama;
    public $tglLahir;
    public $alamat;

    // constructor
    public function _construct()
{
    $this->nama = "anonim";
}


    //method
    public function ucapSalam(){
        echo "<h2> Hallo, perkenalkan nama saya ". $this->nama ."</h2>";
    }

    // destructor
    public function _destruct()
    {
        echo "ini adalah destructor dari" .$this->nama . "<br>";
    }
}