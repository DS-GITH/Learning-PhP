<?php

class ContaPJ extends ContaBancaria
{

    private string $cnpj;

    public function __construct(string $cnpj, string $titular, float $saldo, float $limiteSaque)
    {
        parent::__construct($titular, $saldo, $limiteSaque);
        $this->cnpj = $cnpj;
    }

    public function getCNPj(): string
    {
        return $this->cnpj;
    }

    public function setCNPJ($cnpj): string
    {
        $this->cnpj = $cnpj;

        return $this;
    }
}