<?php

require_once 'Cliente.php';
require_once 'Atendente.php';

class Relatorio {
    use Cliente, Atendente;

    // Construtor para inicializar os valores diretamente
    public function __construct(string $nomeAtendente, string $cargo, float $salario, string $nomeCliente, string $cpf, string $email)
    {
        // Inicializando o atendente
        $this->setAtendente($nomeAtendente, $cargo, $salario);
        
        // Inicializando o cliente
        $this->setCliente($nomeCliente, $cpf, $email);
    }

    public function gerarRelatorio(): void {
        echo "O Atendente " . $this->nomeAtendente . " atendeu o cliente " . $this->nomeCliente . "<br>";
    }
}
