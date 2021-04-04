<?php

namespace Alura\DesignPattern;

use DateTimeImmutable;
use DateTimeInterface;

class GeraPedido 
{
    
    public float $valorOrcamento;
    public int $numeroItens;
    public string $nomeCliente;

    public function __construct(float $valorOrcamento, int $numeroItens, string $nomeCliente)
    {
        $this->valorOrcamento  = $valorOrcamento;
        $this->numeroItens = $numeroItens;
        $this->nomeCliente = $nomeCliente;
    }

}
