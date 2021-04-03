<?php

use Alura\DesignPattern\CalculadoraImpostos;
use Alura\DesignPattern\Impostos\Icms;
use Alura\DesignPattern\Impostos\Iss;
use Alura\DesignPattern\Orcamento;

require '../vendor/autoload.php';

$calculadora = new CalculadoraImpostos();

$orcamento = new Orcamento();

$orcamento->valor =  10;

$icms = $calculadora->calcular($orcamento, new Icms());

$iss = $calculadora->calcular($orcamento, new Iss());
