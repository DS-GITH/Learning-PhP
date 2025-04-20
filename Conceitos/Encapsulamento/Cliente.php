<?php

trait Cliente
{
    public string $nomeCliente;
    public string $cpf;
    public string $email;

    // Se precisar de um construtor para inicializar os valores
    public function setCliente(string $nome, string $cpf, string $email): void
    {
        $this->nomeCliente = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
    }

    public function exibirDados(): void
    {
        echo "Nome: " . $this->nomeCliente . "<br>";
        echo "CPF: " . $this->cpf . "<br>";
        echo "Email: " . $this->email . "<br>";
    }
}
