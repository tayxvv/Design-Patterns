<?php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\Orcamento;


$orcamento1 = new Orcamento();
$orcamento1->quantidadeItens = 7;
$orcamento1->aprova();
$orcamento1->valor = 534252;

$orcamento2 = new Orcamento();
$orcamento2->quantidadeItens = 2;
$orcamento2->reprova();
$orcamento2->valor = 21414;

$orcamento3 = new Orcamento();
$orcamento3->quantidadeItens = 5;
$orcamento3->aprova();
$orcamento3->finaliza();
$orcamento3->valor = 768679;

$listaDeOrcamento = new \Alura\DesignPattern\ListaDeOrcamentos();
$listaDeOrcamento->addOrcamentos($orcamento1);
$listaDeOrcamento->addOrcamentos($orcamento2);
$listaDeOrcamento->addOrcamentos($orcamento3);

foreach ($listaDeOrcamento as $orcamento) {
    echo "Valor {$orcamento->valor}\n";
    echo "Quantidade {$orcamento->quantidadeItens}\n";
}