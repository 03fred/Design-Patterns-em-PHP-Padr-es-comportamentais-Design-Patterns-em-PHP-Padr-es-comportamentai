<?php

use Alura\DesignPattern\ListaDeOrcamento;
use Alura\DesignPattern\ListaDeOrcamentos;
use Alura\DesignPattern\Orcamento;

require '../vendor/autoload.php';

$orcamento1 = new Orcamento();
$orcamento1->quantidadeItens = 7;
$orcamento1->aprova();
$orcamento1->valor = 1500;

$orcamento2 = new Orcamento();
$orcamento2->quantidadeItens = 7;
$orcamento2->reprova();
$orcamento2->valor = 1500;


$orcamento3 = new Orcamento();
$orcamento3->quantidadeItens = 7;
$orcamento3->aprova();
$orcamento3->finaliza();
$orcamento3->valor = 1500;


$listaOrcamento = new ListaDeOrcamentos();
$listaOrcamento->addOrcamento($orcamento1);
$listaOrcamento->addOrcamento($orcamento2);
$listaOrcamento->addOrcamento($orcamento3);

foreach ($listaOrcamento as $orcamento) {
    echo "valor " . $orcamento->valor . PHP_EOL;
    echo "estado " . get_class($orcamento->estadoAtual) . PHP_EOL;
    echo "quantidade Itens " . $orcamento->quantidadeItens . PHP_EOL;
    PHP_EOL;
}
