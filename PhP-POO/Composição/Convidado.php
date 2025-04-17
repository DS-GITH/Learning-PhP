<?php

class Convidado
{
    public string $nome;
    public int $idade;
    public string $telefone;

    public function __construct(string $nome, int $idade, string $telefone)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->telefone = $telefone;
    }

    public function listarConvidados(){
        echo "Nome: $this->nome, Idade: $this->idade, Telefone: $this->telefone";
    }
 
}
