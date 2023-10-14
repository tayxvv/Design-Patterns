<?php

use Alura\DesignPattern\ItemOrcamento;
use Alura\DesignPattern\NotaFiscal\ConstrutorNotaFiscal;
use Alura\DesignPattern\NotaFiscal\ConstrutorNotaFiscalServico;

require 'vendor/autoload.php';

$item1 = new ItemOrcamento();
$item1->valor = 500;

$item2 = new ItemOrcamento();
$item2->valor = 500;

$item3 = new ItemOrcamento();
$item3->valor = 500;

$builder = new ConstrutorNotaFiscalServico();
$notaFiscal = $builder->paraEmpresa('12345', 'Tayssa')
    ->comItem($item1)
    ->comItem($item2)
    ->comItem($item3)
    ->comObservacoes('Esta nota fiscal foi construpida com um construtor')
    ->constroi();

echo $notaFiscal->valorImpostos;