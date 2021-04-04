<?php

namespace Alura\DesignPattern;

use DateTimeImmutable;
use SplObserver;
use SplSubject;

class GeraPedidoHandler implements SplSubject
{
    public Pedido $pedido;
    private array $acoesAposGerarPedido = [];

    public  function executar(GeraPedido $geraPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $geraPedido->numeroItens;
        $orcamento->valor  = $geraPedido->valorOrcamento;
        $pedido = new Pedido();
        $pedido->dataFinalizacao = new DateTimeImmutable();
        $pedido->nomeCliente = $geraPedido->nomeCliente;
        $pedido->orcamento = $orcamento;
        $this->pedido = $pedido;
        $this->notify();
    }

    public function attach(SplObserver $observer)
    {
        array_push($this->acoesAposGerarPedido, $observer);
    }

    public function detach(SplObserver $observer)
    {
    }

    public function notify()
    {
        foreach ($this->acoesAposGerarPedido as $acao) {
            $acao->update($this);
        }
    }
}
