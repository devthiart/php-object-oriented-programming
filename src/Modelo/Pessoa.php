<?php

namespace Alura\Banco\Modelo;

class Pessoa
{
    protected string $nome;
    private CPF $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNomeMinimoCaracteres($nome, 5);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCpf(): string
    {
        return $this->cpf->getNumero();
    }

    protected function validaNomeMinimoCaracteres(string $nome, int $minimoDeCaracteres)
    {
        if(strlen($nome) < $minimoDeCaracteres){

            echo "Nome $nome é inválido. O nome precisa ter pelo menos 5 caracteres.";

            exit();
        }
    }
}
