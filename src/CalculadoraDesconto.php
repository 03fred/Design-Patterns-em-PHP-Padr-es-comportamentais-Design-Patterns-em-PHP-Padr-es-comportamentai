<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Desconto\DescontoMais5Itens;
use Alura\DesignPattern\Desconto\DescontoMaisDe500Reais;
use Alura\DesignPattern\Desconto\SemDesconto;

class CalculadoraDesconto
{
    public function calcular(Orcamento $orcamento): float
    {
        $cadeiaDesconto = new DescontoMais5Itens(
            new DescontoMaisDe500Reais(
                new SemDesconto()
            )
        );

        return $cadeiaDesconto->calculaDesconto($orcamento);
    }
}
