<?php

namespace Alura\Leilao\Service;

use Alura\Leilao\Model\Lance;
use Alura\Leilao\Model\Leilao;

class Avaliador
{
    private $maiorValor = -INF;
    private $menorValor = INF;
    private $maioresLances;

    public function avalia(Leilao $leilao): void
    {
        foreach ($leilao->getLances() as $lance) {
            if ($lance->getValor() > $this->maiorValor) {
                $this->maiorValor = $lance->getValor();
            } 
            
            if ($lance->getValor() < $this->menorValor) {
                $this->menorValor = $lance->getValor();
            }

            $lances = $leilao->getLances();

            usort($lances, function (Lance $lance1, Lance $lance2) {
                return $lance2->getValor() - $lance1->getValor();
            });
            
            $this->maioresLances = array_slice($lances, 0, 3);
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
    public function getMenorValor(): float
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

    /**
     * Get the value of maioresLances
     */ 
    public function getMaioresLances(): array
    {
        return $this->maioresLances;
    }

    /**
     * Set the value of maioresLances
     *
     * @return  self
     */ 
    public function setMaioresLances($maioresLances)
    {
        $this->maioresLances = $maioresLances;

        return $this;
    }
}
