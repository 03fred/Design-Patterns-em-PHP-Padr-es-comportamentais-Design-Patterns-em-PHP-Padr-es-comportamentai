<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use SplObserver;
use SplSubject;

class GeraLogs implements SplObserver
{
    public function update(SplSubject $pedido): void
    {
        echo "Gerando log";
    }
}
