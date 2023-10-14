<?php

use Alura\DesignPattern\Http\CurlHttpAdapter;
use Alura\DesignPattern\Http\ReactPHPHttpAdapter;
use Alura\DesignPattern\RegistroDeOrcamento;

require 'vendor/autoload.php';

$registroOrcamento = new RegistroDeOrcamento(new ReactPHPHttpAdapter());
$registroOrcamento->registrar(new \Alura\DesignPattern\Orcamento());