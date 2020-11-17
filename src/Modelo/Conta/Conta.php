<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta 
{
    private static int $numeroDeContas = 0;
    private Titular $titular;
    private float $saldo;

    public function __construct( Titular $titular )
    {
        echo "Criando nova conta..." . PHP_EOL;

        $this->titular = $titular;

        $this->saldo = 0;

        self::$numeroDeContas++;

        echo 'Conta de ' . $this->titular->getNome() . ' criada com sucesso!' . PHP_EOL;
    }

    public function __destruct()
    {
        echo 'Conta ' . $this->titular->getNome() . ' foi removida da memória.' . PHP_EOL;

        self::$numeroDeContas--;

        echo 'Numero de contas: ' . self::$numeroDeContas . PHP_EOL;
    }
    
    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public static function getNumeroDeContas(): int 
    {
        return self::$numeroDeContas;
    }

    public function sacar(float $valorASacar): void
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorASacar += $tarifaSaque;

        if($valorASacar > $this->saldo) {
            echo "Saldo insuficiente.";
            return;
        }
            
        $this->saldo -= $valorASacar;
    }

    public function depositar(float $valorADepositar): void
    {
        if($valorADepositar < 0) {
            echo "Valor inválido.";
            return;
        }
            
        $this->saldo += $valorADepositar;
    }
    
    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    abstract protected function percentualTarifa(): float ;
}