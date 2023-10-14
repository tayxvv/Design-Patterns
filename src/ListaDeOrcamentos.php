<?php

namespace Alura\DesignPattern;

use ArrayIterator;
use Traversable;

class ListaDeOrcamentos implements \IteratorAggregate
{
    private array $orcamentos;

    public function __construct()
    {
        $this->orcamentos = [];
    }

    public function addOrcamentos(Orcamento $orcamento)
    {
        $this->orcamentos[] = $orcamento;
    }

    public function orcamentos(): array
    {
        return $this->orcamentos;
    }

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->orcamentos());
    }
}