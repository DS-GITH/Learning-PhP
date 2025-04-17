<?php

class Funcionarios
{

    public string $nome;
    public string $cargo;


    public function __construct(string $nome, string $cargo)
    {
        $this->nome = $nome;
        $this->cargo = $cargo;
    }

}