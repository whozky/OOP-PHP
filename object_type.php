<?php

class pribadi{
    public $nama;
    public $umur;

    public function __construct($nama,$umur){
        $this->nama=$nama;
        $this->umur=$umur;
    }

    public function namur() {
        
        return "$this->nama, dan saya $this->umur";
        
    }
}

class salam{
    
    public function hail(pribadi $pribadi){
        
        $kata = "Hallo nama saya: {$pribadi->namur()}";
        return $kata;

    }
}


$pribadi1 = new pribadi("nama","30 Tahun");

echo $pribadi1->namur();

echo"<br>";

$halo = new salam();

echo $halo->hail($pribadi1);