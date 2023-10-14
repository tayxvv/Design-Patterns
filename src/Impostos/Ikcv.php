<?php 

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

class Ikcv extends Imposto
{
    public function realizaCalculoEspecifico(Orcamento $orcamento): float
    {
        if ($orcamento->valor > 300 && $orcamento->quantidadeItens > 3) {
            return $orcamento->valor * 0.04;
        }

        return $orcamento->valor * 0.025;
    }
}