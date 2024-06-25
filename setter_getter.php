<?php

#visible:
#public: member (proprty / method) bisa di gunakan dimana saja
#protected: member (proprty / method) hanya bisa digunakan di class itu dan child nya
#private: member (proprty / method) hanya bisa digunakan didalam class itu saja

class Setter_getter{
    private $var1;
    protected $var2;

    protected function __construct($var1 = "var1", $var2 = "var2"){
        $this->var1 = $var1;
        $this->var2 = $var2;
    }

    public function set_var1($var1) {
        $this->var1 = $var1;
    }
    public function get_var1(){ return $this->var1; }

    public function set_var2($var2) {
        $this->var2 = $var2; 
    }
    public function get_var2(){ return $this->var2; }

    public function apaaja() {
        return "var1: {$this->get_var1()}, var2: {$this->get_var2()}";
    }
}

class child1 extends Setter_getter {
    private $var3;

    public function __construct($var1 = "var1", $var2 = "var2", $var3 = "var3"){
        parent::__construct($var1, $var2);

        $this->var3 = $var3;
    }

    public function apaaja() {
        $str = parent::apaaja() . ", var3: {$this->var3}";
        return $str;
    }
}


$template = new Child1("apa", "aja", "dah");

echo $template->apaaja();

echo"<br>";

$template->set_var1("lasmkda");

echo "var1 ditimpa menjadi: {$template->get_var1()}";