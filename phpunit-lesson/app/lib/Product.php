<?php

declare(strict_types=1);

namespace app\lib;

class Product
{
  private string $name;
  // private string $price;

  public function setName(string $name): void
  {
    $this->name = $name;
  }

  public function getName(): string
  {
    return $this->name;
  }
}