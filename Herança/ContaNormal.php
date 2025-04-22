<?php

class ContaNormal extends ContaBancaria
{

    private string $cpf;

    public function __construct(string $titular, float $saldo, float $limiteSaque, string $cpf)
    {
        parent::__construct($titular, $saldo, $limiteSaque);
        $this->cpf = $cpf;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function setCpf($cpf): string
    {
        $this->cpf = $cpf;

        return $this;
    }
}