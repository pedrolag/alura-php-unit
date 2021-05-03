<?php

namespace Alura\Leilao\Service;

use Alura\Leilao\Model\Leilao;

class Avaliador
{
    private $maiorValor;

    public function avalia(Leilao $leilao): void
    {
        $lances = $leilao->getLances();

        // Pegar o último lance
        $ultimoLance = $lances[count($lances) - 1];
        
        $this->maiorValor = $ultimoLance->getValor();
    }

    /**
     * Get the value of maiorValor
     */ 
    public function getMaiorValor(): float
    {
        return $this->maiorValor;
    }

    /**
     * Set the value of maiorValor
     *
     * @return  self
     */ 
    public function setMaiorValor($maiorValor)
    {
        $this->maiorValor = $maiorValor;

        return $this;
    }
}
