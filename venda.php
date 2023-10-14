<?php

use Alura\DesignPattern\Venda\VendaProdutoFactory;
use Alura\DesignPattern\Venda\VendaServicoFactory;

require 'vendor/autoload.php';

$fabricaVenda = new VendaProdutoFactory(10000);
$venda = $fabricaVenda->criarVenda();
$imposto = $fabricaVenda->imposto();

var_dump($venda, $imposto);