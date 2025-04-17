<?php


class Pedido
{

    public int $id;

    public string $valor;

    public $cliente;

    public function __construct(int $id, string $valor, Cliente $cliente)
    {
        $this->id = $id;
        $this->valor = $valor;
        $this->cliente = $cliente;
    }

    public function exibirInfo(){
        echo "ID: " . $this->id . "<br>";
        echo "Valor: " . $this->valor . "<br>";
        echo "Cliente: " . $this->cliente->nome . "<br>";
        echo "Idade: " . $this->cliente->idade . "<br>";
        echo "Email: " . $this->cliente->email . "<br>";
    }
}