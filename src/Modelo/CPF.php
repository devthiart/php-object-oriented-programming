<?php

namespace Alura\Banco\Modelo;

class CPF 
{
    private string $numero;

    function __construct(string $numero)
    {
        $numero = filter_var($numero, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);

        if($numero === false) {
            echo "***** CPF inválido! *****" . PHP_EOL;
            exit();
        }

        $this->numero = $numero;
    }

    function getNumero(): string
    {
        return $this->numero;
    }

}