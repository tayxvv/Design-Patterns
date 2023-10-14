<?php

use Alura\DesignPattern\PdoConnection;

require 'vendor/autoload.php';

$pdo = PdoConnection::getInstance('sqlite::memory:');
//$pdo->query('');
$pdo2 = PdoConnection::getInstance('sqlite::memory:');

var_dump($pdo, $pdo2);
