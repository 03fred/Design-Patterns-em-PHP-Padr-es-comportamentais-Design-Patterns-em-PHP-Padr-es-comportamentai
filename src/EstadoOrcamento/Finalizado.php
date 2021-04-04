<?php

use Alura\DesignPattern\EstadoOrcamento\EstadoOrcamento;
use Alura\DesignPattern\Orcamento;

class Finalizado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw new DomainException('Um orcamento finalizado não podee receber valor extra');
    }
}
