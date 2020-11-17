<?php

namespace Alura\Banco\Modelo;

class Endereco 
{
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    function getCidade(): string 
    {
        return $this->cidade;
    }

    function getBairro(): string 
    {
        return $this->bairro;
    }

    function getRua(): string 
    {
        return $this->rua;
    }

    function getNumero(): string 
    {
        return $this->numero;
    }
}