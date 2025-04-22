<?php

class ContaBancaria
{

    private string $titular;

    private float $saldo;

    private float $limiteSaque;

    public function __construct(string $titular, float $saldo, float $limiteSaque)
    {
        $this->titular = $titular;
        $this->saldo = $saldo;
        $this->limiteSaque = $limiteSaque;
    }

    public function getTitular(): string
    {
        return $this->titular;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function sacar( float $valor) {

        if ($valor > $this->limiteSaque) {
            throw new Exception("Valor do saque excede o limite permitido.");
        }
        if ($this->saldo < $valor){
            throw new Exception("Saldo insuficiente para saque.");
        }
        elseif ($valor <= 0){
            throw new Exception("Saldo insuficiente para saque.");
        }

        else {
            $this->saldo -= $valor;
            return $this->saldo;
        }
    }

}