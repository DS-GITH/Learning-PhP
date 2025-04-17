<?php


class Departamento
{

    public string $nome;
    public string $localizacao;
    public $funcionarios = [];

    public function __construct(string $nome, string $localizacao, Funcionarios $funcionarios)
    {
        $this->nome = $nome;
        $this->localizacao = $localizacao;
        $this->funcionarios[] = $funcionarios;
    }

    public function adicionarFuncionario(Funcionarios $funcionario)
    {
        $this->funcionarios[] = $funcionario;
    }

    public function listarFuncionarios()
    {
        echo "Funcionários do departamento " . $this->nome . ":\n";
        foreach ($this->funcionarios as $funcionario) {
            echo "Nome: " . $funcionario->nome . ", Cargo: " . $funcionario->cargo . "\n";
        }
    }
}