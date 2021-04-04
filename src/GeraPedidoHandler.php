<?php

namespace Alura\DesignPattern;

use DateTimeImmutable;
use DateTimeInterface;

class GeraPedidoHandler
{

    public  function executar(GeraPedido $geraPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $geraPedido->numeroItens;
        $orcamento->valor  = $geraPedido->valorOrcamento;

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new DateTimeImmutable();
        $pedido->nomeCliente = $geraPedido->nomeCliente;
        $pedido->orcamento = $orcamento;


        echo "Cria pedido no banco de dados" .  PHP_EOL;
    }
}
