<?php


class cliente
{

    public string $nome;

    public int $idade;

    public string $email;


    public function __construct(string $nome, int $idade, string $email)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->email = $email;
    }
    
          
}