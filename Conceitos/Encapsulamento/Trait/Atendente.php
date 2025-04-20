<?php

trait Atendente
{
    protected string $nomeAtendente;
    private string $cargo;
    private float $salario;

    public function setAtendente(string $nome, string $cargo, float $salario): void
    {
        $this->nomeAtendente = $nome;
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function exibirFuncionarios(): void
    {
        echo "Nome: " . $this->nomeAtendente . "<br>";
        echo "Cargo: " . $this->cargo . "<br>";
        echo "Salário: " . $this->salario . "<br>";
    }
}
