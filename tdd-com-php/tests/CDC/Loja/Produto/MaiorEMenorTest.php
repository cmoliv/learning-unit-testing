<?php

namespace CDC\Loja\Produto;

use CDC\Loja\Carrinho\CarrinhoDeCompras,
  CDC\Loja\Produto\Produto,
  CDC\Loja\Produto\MaiorEMenor;

use PHPUnit\Framework\TestCase as PHPUnit;

final class MaiorEMenorTest extends PHPUnit
{
  public function testOrdemDecrescente()
  {
    $carrinho = new CarrinhoDeCompras();

    $carrinho->adiciona(new Produto("Geladeira", 950.00));
    $carrinho->adiciona(new Produto("Liquidificador", 250.00));
    $carrinho->adiciona(new Produto("Jogo de pratos", 100.00));

    $maiorEMenor = new MaiorEMenor();
    $maiorEMenor->encontra($carrinho);

    $this->assertEquals("Jogo de pratos", $maiorEMenor->getMenor()->getNome());
    $this->assertEquals("Geladeira", $maiorEMenor->getMaior()->getNome());
  }
}
