<?php

declare(strict_types=1);

namespace app\lib;

use app\exceptions\FullCartException;

class Cart
{
  private array $products = [];

  public function add(Product $product): object
  {
    if (count($this->products) === 3) {
      throw new FullCartException('Cart cannot have more than three products');
    }

    $this->products[] = $product;

    return $this;
  }

  public function getCart(): array
  {
    return $this->products;
  }
}