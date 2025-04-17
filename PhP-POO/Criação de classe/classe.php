<?php


class Pessoa
{

public string $nome;

public string $lugar;

public function cagar(){
    return "O {$this->nome} está querendo soltar o barroso na {$this->lugar}";
}

}

?>