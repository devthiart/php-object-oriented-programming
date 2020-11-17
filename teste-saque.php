<?php
use Alura\Banco\Modelo\Conta\{ContaCorrente, ContaPoupanca, Titular};
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$conta = new ContaCorrente(
    New Titular(
        New CPF('123.456.789-10'), 
        'João de Almeida', 
        new Endereco('Diadema', 'Centro', 'Rua 1', '37')
    )
);

$conta->depositar(500);

$conta->sacar(100);

echo $conta->getSaldo() . PHP_EOL;