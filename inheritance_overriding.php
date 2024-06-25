<?php

class orangTua {

    public $nama, $umur, $alamat;

    public function __construct($nama = "nama", $umur = "umur", $alamat = "alamat") {

        $this->nama = $nama;
        $this->umur = $umur;
        $this->alamat = $alamat;

    }

    public function orang() {
        return "{$this->nama}, saya berumur {$this->umur}, dan saya tinggal di {$this->alamat}";
    }
    
}

class anak1 extends orangTua {

    public $kelamin, $status;

    public function __construct($nama = "nama", $umur = "umur", $alamat = "alamat", $kelamin = "kelamin", $status = "status") {
        parent::__construct($nama, $umur, $alamat);

        $this->kelamin = $kelamin;
        $this->status = $status;
    }

    public function orang() {

        $var = parent::orang() . " saya seorang {$this->kelamin}, dan saya {$this->status}";
        return $var;

    }

}

class anak2 extends orangTua {

    public $pendidikan, $hoby;

    public function __construct($nama = "nama", $umur = "umur", $alamat = "alamat", $pendidikan = "pendidikan", $hoby = "hoby") {
        parent::__construct($nama, $umur, $alamat,);

        $this->pendidikan = $pendidikan;
        $this->hoby = $hoby;
    }

    public function orang() {

        $var = parent::orang() ." saya sedang ber{$this->pendidikan}, hoby saya {$this->hoby}";
        return $var;

    }

}

class apa{
    public function Hallo(orangTua $orangTua) {
        $salam = "Hallo nama saya {$orangTua->orang()}";
        return $salam;
    }
}

$orang1 = new anak1("mamat", "31", "JL. jalan yuk", "jantan", "single");
$orang2 = new anak2("memet","13", "JL. jalan doang gak jadian", "kuliah", "ngoding");



$salam = new apa();



echo $salam->Hallo($orang1);
echo "<br>";
echo $salam->Hallo($orang2);