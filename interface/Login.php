<?php

class Login implements CredenciaisObrigatorias
{
    private $senha;
    private $nome;

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function getNome()
    {
        return $this->nome;
    }
}