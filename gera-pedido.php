<?php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\AcoesAoGerarPedido\GerarLog;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Pedido;
use Alura\DesignPattern\GerarPedido;
use Alura\DesignPattern\GerarPedidoHandler;

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $numeroDeItens, $nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new GerarLog);
$gerarPedidoHandler->execute($gerarPedido);