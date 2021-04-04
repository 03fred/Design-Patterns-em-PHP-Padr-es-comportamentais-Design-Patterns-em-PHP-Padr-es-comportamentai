<?php

namespace Alura\DesignPattern;

use ArrayIterator;
use IteratorAggregate;

class ListaDeOrcamentos implements IteratorAggregate
{
    private array $orcamentos = [];

    public function addOrcamento(Orcamento $orcamento)
    {
        array_push($this->orcamentos, $orcamento);
    }
    
    public function getIterator()
    {
        return new ArrayIterator($this->orcamentos);
    }
}
