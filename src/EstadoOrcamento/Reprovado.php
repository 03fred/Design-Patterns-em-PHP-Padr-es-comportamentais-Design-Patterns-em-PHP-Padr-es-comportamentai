<?php

namespace Alura\DesignPattern\EstadoOrcamento;

use Alura\DesignPattern\EstadoOrcamento\EstadoOrcamento;
use Alura\DesignPattern\Orcamento;
use DomainException;

class Reprovado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw new DomainException('Um orcamento reprovado não podee receber valor extra');
    }

    public function finaliza(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Finalizado();
    }

}
