<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use SplObserver;
use SplSubject;

class EnviaPedidoEmail implements SplObserver
{
    public function update(SplSubject $pedido): void
    {
        echo "enviando  email";
    }
}
