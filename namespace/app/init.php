<?php

// require_once 'data/antarMuka.php';
// require_once 'data/orangTua.php';
// require_once 'data/child.php';
// require_once 'data/user.php';

// require_once 'service/user.php';

// spl_autoload_register(function ($class) {
//     require_once __DIR__.'/data/'.$class.'.php';
// });

spl_autoload_register(function($class) {
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__.'/data/'.$class.'.php';
});

spl_autoload_register(function($class) {
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__.'/service/'.$class.'.php';
});