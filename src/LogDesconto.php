<?php

namespace Alura\DesignPattern;

class LogDesconto
{
    public function informar(float $desconto): void
    {
        //biblioteca de log
        echo "Salvando log de desconto: {$desconto}";
    }
}