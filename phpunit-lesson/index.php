<?php

require "./vendor/autoload.php";

use app\lib\Cart;
use app\lib\Product;

$cart = new Cart();
$product = new Product();

$product->setName('Trakinas');
// var_dump($product->getName());

$cart->add($product);

var_dump($cart->getCart());