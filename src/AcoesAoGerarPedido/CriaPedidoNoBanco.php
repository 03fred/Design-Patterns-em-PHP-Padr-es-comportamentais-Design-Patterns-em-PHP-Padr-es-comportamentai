<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use SplObserver;
use SplSubject;

class CriaPedidoNoBanco implements SplObserver
{
    public  function update(SplSubject $pedido): void
    {
        echo "Salvando pedido no banco";
    }
}
