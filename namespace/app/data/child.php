<?php

class child extends orangTua implements antarMuka {
    private $var3;

    public function __construct($var1 = "var1", $var2 = "var2", $var3 = "var3"){
        parent::__construct($var1, $var2);

        $this->var3 = $var3;
    }

    public function orangTua() {
        return parent::return();
    }

    public function antarMuka() {
        $str = $this->orangTua() . ", var3: {$this->var3}";
        return $str;
    }
}