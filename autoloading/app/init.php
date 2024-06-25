<?php

// require_once 'data/antarMuka.php';
// require_once 'data/orangTua.php';
// require_once 'data/child.php';

spl_autoload_register(function ($class) {
    require_once __DIR__.'/data/'.$class.'.php';
});