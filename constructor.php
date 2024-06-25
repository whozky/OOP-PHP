<?php

class Constructor{
    public $nama;
    public $umur;

    public function __construct($nama, $umur = "ini nilai default"){
        $this->nama = $nama;
        $this->umur = $umur;
    }

    public function salam() {

        return "Haloo ".$this->nama. ' | '. $this->umur; 

    }
}

$salamat = new Constructor("cara mengisi property (disarankan)");

echo  $salamat->salam();