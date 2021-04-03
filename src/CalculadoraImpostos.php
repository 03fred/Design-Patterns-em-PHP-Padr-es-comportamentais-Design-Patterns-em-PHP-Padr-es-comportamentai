<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Impostos\Imposto;

class CalculadoraImpostos
{
    public function calcularImpostos(Orcamento $orcamento, Imposto $imposto): float
    {
        return $imposto->calcular($orcamento);
    }
}
