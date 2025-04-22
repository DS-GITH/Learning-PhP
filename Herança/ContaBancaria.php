<?php

class ContaBancaria
{

    protected string $titular;

    protected float $saldo;

    public function __construct(string $titular, float $saldo)
    {
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function getTitular(): string
    {
        return $this->titular;
    }

    public function setTitular($titular): string
    {
        $this->titular = $titular;

        return $this;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function setSaldo($saldo): string
    {
        $this->saldo = $saldo;

        return $this;
    }

    public function sacar( float $valor) {
        $limiteSaque = 1000; // Definindo um limite de saque padrão

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