<?php

class Atendente
{

    protected string $nome;
    private string $cargo;
    private float $salario;

    public function __construct(string $nome, string $cargo, float $salario)
    {
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function setNome($N): string
    {
        return $this->nome = $N;
    }

    public function setSalario($S): float
    {
        return $this->salario = $S;
    }

    public function setCargo($C): string
    {
        return $this->cargo = $C;
    }

    public function exibirFuncionarios()
    {
        echo "Nome: " . $this->nome . "<br>";
        echo "Cargo: " . $this->cargo . "<br>";
        echo "Salário: " . $this->salario . "<br>";
    }

}