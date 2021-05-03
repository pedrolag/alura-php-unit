<?php

namespace Alura\Leilao\Tests\Service;

use PHPUnit\Framework\TestCase;
use Alura\Leilao\Model\Lance;
use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Model\Usuario;
use Alura\Leilao\Service\Avaliador;

class AvaliadorTest extends TestCase
{
    /**
     * @dataProvider leilaoEmOrdemCrescente
     * @dataProvider leilaoEmOrdemDecrescente
     * @dataProvider leilaoEmOrdemAleatoria
     */
    public function testAvaliadorDeveEncontrarOMaiorValorDeLances(Leilao $leilao)
    {
        /**
         * @link http://wiki.c2.com/?ArrangeActAssert
         * @link https://martinfowler.com/bliki/GivenWhenThen.html
         */

        // Act - When
        $leiloeiro = new Avaliador();
        $leiloeiro->avalia($leilao);

        $maiorValor = $leiloeiro->getMaiorValor();

        // Assert - Then
        // self::assertEquals(2500, $maiorValor);
        $this->assertEquals(2500, $maiorValor);
    }

    /**
     * @dataProvider leilaoEmOrdemCrescente
     * @dataProvider leilaoEmOrdemDecrescente
     * @dataProvider leilaoEmOrdemAleatoria
     */
    public function testAvaliadorDeveEncontrarOMenorValorDeLances(Leilao $leilao)
    {
        /**
         * @link http://wiki.c2.com/?ArrangeActAssert
         * @link https://martinfowler.com/bliki/GivenWhenThen.html
         */

        // Arrange - Given
        $joao = new Usuario('João');
        $maria = new Usuario('Maria');

        $leilao->recebeLance(new Lance($joao, 2000));
        $leilao->recebeLance(new Lance($maria, 2500));

        // Act - When
        $leiloeiro = new Avaliador();
        $leiloeiro->avalia($leilao);

        $menorValor = $leiloeiro->getMenorValor();

        // Assert - Then
        $this->assertEquals(1700, $menorValor);
    }

    /**
     * @dataProvider leilaoEmOrdemCrescente
     * @dataProvider leilaoEmOrdemDecrescente
     * @dataProvider leilaoEmOrdemAleatoria
     */
    public function testAvaliadorDeveBuscar3MaioresValores(Leilao $leilao)
    {
        $leiloeiro = new Avaliador();
        $leiloeiro->avalia($leilao);

        $maiores = $leiloeiro->getMaioresLances();

        // Verifica se o array de maiores lances tem no mínimo 3 lances
        $this->assertCount(3, $maiores);
        $this->assertEquals(2500, $maiores[0]->getValor());
        $this->assertEquals(2000, $maiores[1]->getValor());
        $this->assertEquals(1700, $maiores[2]->getValor());
    }

    public function leilaoEmOrdemCrescente()
    {
        $leilao = new Leilao('Fiat 147 0KM');

        $joao = new Usuario('João');
        $maria = new Usuario('Maria');
        $ana = new Usuario('Ana');
        
        $leilao->recebeLance(new Lance($ana, 1700));
        $leilao->recebeLance(new Lance($joao, 2000));
        $leilao->recebeLance(new Lance($maria, 2500));

        return [
            [$leilao]
        ];
    }

    public function leilaoEmOrdemDecrescente()
    {
        $leilao = new Leilao('Fiat 147 0KM');

        $joao = new Usuario('João');
        $maria = new Usuario('Maria');
        $ana = new Usuario('Ana');
        
        $leilao->recebeLance(new Lance($maria, 2500));
        $leilao->recebeLance(new Lance($joao, 2000));
        $leilao->recebeLance(new Lance($ana, 1700));

        return [
            [$leilao]
        ];
    }

    public function leilaoEmOrdemAleatoria()
    {
        $leilao = new Leilao('Fiat 147 0KM');

        $joao = new Usuario('João');
        $maria = new Usuario('Maria');
        $ana = new Usuario('Ana');
        
        $leilao->recebeLance(new Lance($joao, 2000));
        $leilao->recebeLance(new Lance($maria, 2500));
        $leilao->recebeLance(new Lance($ana, 1700));

        return [
            [$leilao]
        ];
    }
}
