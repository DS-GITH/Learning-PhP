<?php

class Festa
{
    public string $localizacao;
    public string $data;
    public Convidado $convidados;

    public function __construct(string $localizacao, string $data, string $nome, int $idade, string $telefone)
    {
        $this->localizacao = $localizacao;
        $this->data = $data;
        $this->convidados = new Convidado($nome, $idade, $telefone);
    }

    public function exibirListaConvidados(){
        echo "Localização: $this->localizacao, Data: $this->data\n";
        echo "Convidados:\n";
        $this->convidados->listarConvidados();
    }
}

