<?php

use Alura\Leilao\Model\Lance;
use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Model\Usuario;
use Alura\Leilao\Service\Avaliador;

require 'vendor/autoload.php';

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
if ($maiorValor == $valorEsperado) {
    echo "Teste OK";
} else {
    echo "Teste falhou";
}