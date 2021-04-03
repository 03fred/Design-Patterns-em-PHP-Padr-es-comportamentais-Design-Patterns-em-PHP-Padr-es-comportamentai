<?php

use Alura\DesignPattern\CalculadoraImpostos;
use Alura\DesignPattern\CalculadoraDesconto;
use Alura\DesignPattern\Impostos\Icms;
use Alura\DesignPattern\Impostos\Iss;
use Alura\DesignPattern\Orcamento;

require '../vendor/autoload.php';

$orcamento = new Orcamento();

$orcamento->valor =  10;
$orcamento->quantidadeItens = 7;

$calculadoraDesconto = new CalculadoraDesconto();
$valor = $calculadoraDesconto->calcular($orcamento);

var_dump($valor);
$calculadora = new CalculadoraImpostos();

$icms = $calculadora->calcularImpostos($orcamento, new Icms());

$iss = $calculadora->calcularImpostos($orcamento, new Iss());
