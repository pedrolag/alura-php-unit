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

        $valorEsperado = 2500;

        // Assert - Then
        // self::assertEquals(2500, $maiorValor);
        $this->assertEquals(2500, $maiorValor);

        if ($maiorValor == $valorEsperado) {
            echo "Teste OK";
        } else {
            echo "Teste falhou";
        }
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

        $valorEsperado = 2500;

        // Assert - Then
        // self::assertEquals(2500, $maiorValor);
        $this->assertEquals(2500, $maiorValor);

        if ($maiorValor == $valorEsperado) {
            echo "Teste OK";
        } else {
            echo "Teste falhou";
        }
    }
}
