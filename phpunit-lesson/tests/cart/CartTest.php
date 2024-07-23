<?php

namespace tests;

use app\lib\Cart;
use app\lib\Product;
use app\exceptions\FullCartException;

use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
  public function test_if_cart_is_empty()
  {
    $cart = new Cart();

    $this->assertEmpty($cart->getCart());
  }

  public function test_if_cart_is_not_empty()
  {
    $cart = new Cart();
    $product = new Product();

    $product->setName("Trakinas");
    $cart->add($product);

    $this->assertNotEmpty($cart->getCart());
  }

  public function test_catch_exception_if_cart_has_more_than_three_products()
  {
    $this->expectException(FullCartException::class);
  
    $cart = new Cart();

    $p1 = new Product();
    $p2 = new Product();
    $p3 = new Product();
    $p4 = new Product();

    $cart->add($p1)->add($p2)->add($p3)->add($p4);
  }
}
