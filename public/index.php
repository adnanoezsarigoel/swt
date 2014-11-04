<?php
    session_start();
    header('content-type: text/html; charset=UTF-8');
    
    // define paths
    define('ROUTE_PATH',        '../');
    define('APPLICATION_PATH',  ROUTE_PATH . 'application/');
    define('DATA_PATH',         ROUTE_PATH . 'data/');
    
    // include files
    include_once (DATA_PATH . 'Kernel.php');             // Load Kernel
    
    $kernel = new Kernel();    
    $kernel->run();
    