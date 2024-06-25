<?php

abstract class Setter_getter{
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

    abstract public function qwerty();

    public function apaanaja() {
        return "var1: {$this->get_var1()}, var2: {$this->get_var2()}";
    }
}

class child1 extends Setter_getter {
    private $var3;

    public function __construct($var1 = "var1", $var2 = "var2", $var3 = "var3"){
        parent::__construct($var1, $var2);

        $this->var3 = $var3;
    }

    public function qwerty() {
        $str = $this->apaanaja() . ", var3: {$this->var3}";
        return $str;
    }
}


$template = new Child1("apa", "aja", "dah");

echo $template->qwerty();

echo"<br>";

$template->set_var1("lasmkda");

echo "var1 ditimpa menjadi: {$template->get_var1()}";


