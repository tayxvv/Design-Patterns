<?php

use Alura\DesignPattern\Pedido\TemplatePedido;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Pedido\CriadorDePedido;
use Alura\DesignPattern\Pedido\Pedido;

require 'vendor/autoload.php';

$pedidos = [];
$criadorPedido = new CriadorDePedido();
// $dados = new TemplatePedido(md5('a'), new \DateTimeImmutable());
// $dados->dataFinalizacao = new \DateTimeImmutable();
// $dados->nomeCliente = md5('a');

for ($i = 0; $i < 1000; $i++) {
    $orcamento = new Orcamento();
    $pedido = $criadorPedido->criaPedido(
        'Tayssa',
        date('Y-m-d'),
        $orcamento);
    
    $pedidos[] = $pedido;
}

echo memory_get_peak_usage();