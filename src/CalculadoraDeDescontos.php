<?php 

namespace Alura\DesignPattern;

use Alura\DesignPattern\Descontos\DescontoMaisDeCincoItens;
use Alura\DesignPattern\Descontos\DescontoMaisDeQuinhentosItens;
use Alura\DesignPattern\Descontos\SemDesconto;

class CalculadoraDeDescontos
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        $cadeiaDeDescontos = new DescontoMaisDeCincoItens(
            new DescontoMaisDeQuinhentosItens(
                new SemDesconto()
            )
        );

        $descontoCalculado = $cadeiaDeDescontos->calculaDesconto($orcamento);
        $logDesconto = new LogDesconto();
        $logDesconto->informar($descontoCalculado);

        return $descontoCalculado;
    }
}