<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Funcionario;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Modelo\Funcionario\Diretor;

$umDesenvolvedor = new Desenvolvedor(
    'Vinicius Dias',
    new CPF('123.456.789-10'),
    'Desenvolvedor',
    1000
);

$umaGerente = new Gerente(
    'Patricia',
    new CPF('987.654.321-10'),
    'Gerente',
    3000
);

$umaDiretora = new Diretor(
    'Ana Paula',
    new CPF('987.654.321-01'),
    'Diretora',
    5000
);

var_dump($umDesenvolvedor);
var_dump($umaGerente);
var_dump($umaDiretora);

$controlador = new ControladorDeBonificacoes();

$controlador->adicionaBonificacaoDe($umDesenvolvedor);
$controlador->adicionaBonificacaoDe($umaGerente);
$controlador->adicionaBonificacaoDe($umaDiretora);

echo $controlador->getTotal();