<?php

use Alura\DesignPattern\AcoesAoGerarPedido\CriaPedidoNoBanco;
use Alura\DesignPattern\AcoesAoGerarPedido\EnviaPedidoEmail;
use Alura\DesignPattern\AcoesAoGerarPedido\GeraLogs;
use Alura\DesignPattern\GeraPedido;
use Alura\DesignPattern\GeraPedidoHandler;

require '../vendor/autoload.php';

$valorOrcamento = $argv[1];
$numeroItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GeraPedido($valorOrcamento, $numeroItens, $nomeCliente);
$gerarPedidoHandler = new GeraPedidoHandler();
$gerarPedidoHandler->attach(new CriaPedidoNoBanco());
$gerarPedidoHandler->attach(new EnviaPedidoEmail());
$gerarPedidoHandler->attach(new GeraLogs());
$gerarPedidoHandler->executar($gerarPedido);
