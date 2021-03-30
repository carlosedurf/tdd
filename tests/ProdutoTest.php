<?php

namespace Source;

use PHPUnit\Framework\TestCase;

class ProdutoTest extends TestCase
{
    private $produto;

    protected function setUp(): void
    {
        $this->produto = new Produto();
    }

//    public static function setUpBeforeClass(): void
//    {
//        var_dump(__METHOD__);
//    }

//    public static function tearDownAfterClass(): void
//    {
//        var_dump(__CLASS__);
//    }

    public function testSeONomeDoProdutoESetadoCorretamente()
    {
        $product = $this->produto;
        $nameProduct = $product->setName('Produto 1');

        $this->assertEquals('Produto 1', $product->getName(), 'Valores não são iguais!');
    }

    public function testSeOPrecoDoProdutoESetadoCorretamente()
    {
        $product = $this->produto;
        $nameProduct = $product->setPrice('19.99');

        $this->assertEquals('19.99', $product->getPrice(), 'Valores não são iguais!');
    }

    public function testSeOSlugDoProdutoESetadoCorretamente()
    {
        $product = $this->produto;
        $nameProduct = $product->setSlug('produto-1');

        $this->assertEquals('produto-1', $product->getSlug(), 'Valores não são iguais!');
    }

    /* Para lembrar dos anotations
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Parâmetro inválido, informe um slug
     * @test
     */
    public function testSeSetSlugLancaExceptionQuandoNaoInformada()
    {
        $this->expectException('\InvalidArgumentException');
        $this->expectExceptionMessage('Parâmetro inválido, informe um slug');

        $product = $this->produto;
        $product->setSlug('');
    }

}