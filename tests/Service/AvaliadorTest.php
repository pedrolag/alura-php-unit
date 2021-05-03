<?php

namespace Alura\Leilao\Tests\Service;

use PHPUnit\Framework\TestCase;
use Alura\Leilao\Model\Lance;
use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Model\Usuario;
use Alura\Leilao\Service\Avaliador;

class AvaliadorTest extends TestCase
{
    public function testAvaliadorDeveEncontrarOMaiorValorDeLancesEmOrdemCrescente()
    {
        /**
         * @link http://wiki.c2.com/?ArrangeActAssert
         * @link https://martinfowler.com/bliki/GivenWhenThen.html
         */

        // Arrange - Given
        $leilao = new Leilao('Fiat 147 0KM');

        $joao = new Usuario('João');
        $maria = new Usuario('Maria');

        $leilao->recebeLance(new Lance($joao, 2000));
        $leilao->recebeLance(new Lance($maria, 2500));

        // Act - When
        $leiloeiro = new Avaliador();
        $leiloeiro->avalia($leilao);

        $maiorValor = $leiloeiro->getMaiorValor();

        // Assert - Then
        // self::assertEquals(2500, $maiorValor);
        $this->assertEquals(2500, $maiorValor);
    }

    public function testAvaliadorDeveEncontrarOMaiorValorDeLancesEmOrdemDecrescente()
    {
        /**
         * @link http://wiki.c2.com/?ArrangeActAssert
         * @link https://martinfowler.com/bliki/GivenWhenThen.html
         */

        // Arrange - Given
        $leilao = new Leilao('Fiat 147 0KM');

        $joao = new Usuario('João');
        $maria = new Usuario('Maria');

        $leilao->recebeLance(new Lance($maria, 2500));
        $leilao->recebeLance(new Lance($joao, 2000));

        // Act - When
        $leiloeiro = new Avaliador();
        $leiloeiro->avalia($leilao);

        $maiorValor = $leiloeiro->getMaiorValor();

        // Assert - Then
        // self::assertEquals(2500, $maiorValor);
        $this->assertEquals(2500, $maiorValor);
    }

    public function testAvaliadorDeveEncontrarOMenorValorDeLancesEmOrdemCrescente()
    {
        /**
         * @link http://wiki.c2.com/?ArrangeActAssert
         * @link https://martinfowler.com/bliki/GivenWhenThen.html
         */

        // Arrange - Given
        $leilao = new Leilao('Fiat 147 0KM');

        $joao = new Usuario('João');
        $maria = new Usuario('Maria');

        $leilao->recebeLance(new Lance($joao, 2000));
        $leilao->recebeLance(new Lance($maria, 2500));

        // Act - When
        $leiloeiro = new Avaliador();
        $leiloeiro->avalia($leilao);

        $menorValor = $leiloeiro->getMenorValor();

        // Assert - Then
        $this->assertEquals(2000, $menorValor);
    }

    public function testAvaliadorDeveEncontrarOMenorValorDeLancesEmOrdemDecrescente()
    {
        /**
         * @link http://wiki.c2.com/?ArrangeActAssert
         * @link https://martinfowler.com/bliki/GivenWhenThen.html
         */

        // Arrange - Given
        $leilao = new Leilao('Fiat 147 0KM');

        $joao = new Usuario('João');
        $maria = new Usuario('Maria');

        $leilao->recebeLance(new Lance($maria, 2500));
        $leilao->recebeLance(new Lance($joao, 2000));

        // Act - When
        $leiloeiro = new Avaliador();
        $leiloeiro->avalia($leilao);

        $menorValor = $leiloeiro->getMenorValor();

        // Assert - Then
        $this->assertEquals(2000, $menorValor);
    }

    public function testAvaliadorDeveBuscar3MaioresValores()
    {
        $leilao = new Leilao('Fiat 147 0KM');
        $joao = new Usuario('João');
        $maria = new Usuario('Maria');
        $ana = new Usuario('Ana');
        $jorge = new Usuario('Jorge');

        $leilao->recebeLance(new Lance($ana, 1500));
        $leilao->recebeLance(new Lance($joao, 1000));
        $leilao->recebeLance(new Lance($maria, 2000));
        $leilao->recebeLance(new Lance($jorge, 1700));

        $leiloeiro = new Avaliador();
        $leiloeiro->avalia($leilao);

        $maiores = $leiloeiro->getMaioresLances();

        // Verifica se o array de maiores lances tem no mínimo 3 lances
        $this->assertCount(3, $maiores);
        $this->assertEquals(2000, $maiores[0]->getValor());
        $this->assertEquals(1700, $maiores[1]->getValor());
        $this->assertEquals(1500, $maiores[2]->getValor());
    }
}
