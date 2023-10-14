<?php 

namespace Alura\DesignPattern\Pedido;

use Alura\DesignPattern\Pedido\TemplatePedido;
use Alura\DesignPattern\Orcamento;

class Pedido
{
    public TemplatePedido $template;
    public Orcamento $orcamento;
}