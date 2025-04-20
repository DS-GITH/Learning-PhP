<?php

class Cliente
{

    public string $nome;
    public string $cpf;
    public string $email;


    public function __construct(string $nome, string $cpf, string $email)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
    }

    public function exibirDados()
    {
        echo "Nome: " . $this->nome . "<br>";
        echo "CPF: " . $this->cpf . "<br>";
        echo "Email: " . $this->email . "<br>";
    }
}