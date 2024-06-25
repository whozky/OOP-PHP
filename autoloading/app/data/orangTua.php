<?php

abstract class orangTua{
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

    abstract public function orangTua();

    public function return() {
        return "var1: {$this->get_var1()}, var2: {$this->get_var2()}";
    }
}