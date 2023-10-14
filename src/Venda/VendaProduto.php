<?php

namespace Alura\DesignPattern\Venda;

class VendaProduto extends Venda
{
    private string $pesoProduto;

    public function __construct(\DateTimeInterface $dataRealizacao, string $pesoProduto)
    {
        parent::__construct($dataRealizacao);
        $this->pesoProduto = $pesoProduto;   
    }
}