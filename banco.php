<?php
require_once('autoload.php');

use Alura\Banco\Modelo\Conta\{Titular, Conta};
use Alura\Banco\Modelo\{Endereco, CPF, Funcionario};

$endereco = new Endereco('Cidade', 'Bairro', 'Rua', '100');

$primeiraConta = new Conta(new Titular(new CPF("123.456.789-10"), "Ana Maria", $endereco));

$segundaConta = new Conta(new Titular(new CPF("987.654.321-01"), "João Paulo", $endereco));

$primeiraConta->depositar(500);

$primeiraConta->sacar(183.75);

$primeiraConta->transferir(200, $segundaConta);

echo "Contas criadas: " . Conta::getNumeroDeContas() . PHP_EOL;

$cpf = new CPF("123.456.789-11");

var_dump($primeiraConta);
var_dump($segundaConta);

$titular = new Titular($cpf, "Alberto Cleyton de Almeida", $endereco);

$Funcionario = new Funcionario("Geraldo de Camões", new CPF("098.765.432-10"), "Gerente");

echo $titular->getCpf() . PHP_EOL;


