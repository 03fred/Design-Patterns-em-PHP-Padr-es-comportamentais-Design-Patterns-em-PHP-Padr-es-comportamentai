<?php

namespace Alura\DesignPattern\Desconto;

use Alura\DesignPattern\Orcamento;

class DescontoMais5Itens extends Desconto
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        if ($orcamento->valor > 500) {
            return $orcamento->valor * 0.5;
        }

        return $this->proximoDesconto->calculaDesconto($orcamento);
    }
}
