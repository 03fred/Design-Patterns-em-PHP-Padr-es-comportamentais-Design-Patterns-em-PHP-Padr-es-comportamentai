<?php


namespace Alura\DesignPattern\EstadoOrcamento;


use Alura\DesignPattern\EstadoOrcamento\EstadoOrcamento;
use Alura\DesignPattern\Orcamento;
use DomainException;

class Finalizado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw new DomainException('Um orcamento finalizado não pode receber valor extra');
    }
}
