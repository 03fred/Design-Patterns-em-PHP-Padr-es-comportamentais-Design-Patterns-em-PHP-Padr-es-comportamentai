<?php

use Alura\DesignPattern\GeraPedido;
use Alura\DesignPattern\GeraPedidoHandler;

require '../vendor/autoload.php';

$valorOrcamento = $argv[1];
$numeroItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GeraPedido($valorOrcamento, $numeroItens, $nomeCliente);
$gerarPedidoHandler = new GeraPedidoHandler();
$gerarPedidoHandler->executar($gerarPedido);

