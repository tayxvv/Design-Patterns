<?php

namespace Alura\DesignPattern\Log;

class StdoutManager extends LogManager
{
    public function criarLogWritter(): LogWritter
    {
        return new StdoutLogWritter();
    }
}