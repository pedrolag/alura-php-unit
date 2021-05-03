<?php

namespace Alura\Leilao\Service;

use Alura\Leilao\Model\Leilao;

class Avaliador
{
    private $maiorValor = -INF;
    private $menorValor = INF;

    public function avalia(Leilao $leilao): void
    {
        foreach ($leilao->getLances() as $lance) {
            if ($lance->getValor() > $this->maiorValor) {
                $this->maiorValor = $lance->getValor();
            } 
            
            if ($lance->getValor() < $this->menorValor) {
                $this->menorValor = $lance->getValor();
            }
        }
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

    /**
     * Get the value of menorValor
     */ 
    public function getMenorValor()
    {
        return $this->menorValor;
    }

    /**
     * Set the value of menorValor
     *
     * @return  self
     */ 
    public function setMenorValor($menorValor)
    {
        $this->menorValor = $menorValor;

        return $this;
    }
}
