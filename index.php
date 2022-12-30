<?php

spl_autoload_register(
    function($class){
        $path  = __DIR__ . '/' . str_replace('\\', '/', $class).'.php';
        if(file_exists($path)){
            require $path;
        }
    }
);

use ProductXMLFeed\Product\Product;
use ProductXMLFeed\CimriFileFactory;

$products = new Product('products.json');

$products->createFile(new CimriFileFactory());
?> 
