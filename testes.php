<?php

use Alura\DesignPattern\CalculadoraDeDescontos;
use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\Impostos\Icms;
use Alura\DesignPattern\Impostos\Ikcv;
use Alura\DesignPattern\Impostos\Iss;
use Alura\DesignPattern\Orcamento;

require 'vendor/autoload.php';

$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

echo $calculadora->calcula($orcamento, new Iss(new Icms(new Ikcv())));

// $calculadora = new CalculadoraDeDescontos();
// $orcamento = new Orcamento();
// $orcamento->valor = 200;
// $orcamento->quantidadeItens = 7;

// echo $calculadora->calculaDesconto($orcamento);