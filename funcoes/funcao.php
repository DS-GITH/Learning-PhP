<?php
// Função sem parâmetros
function imprimirMensagem()
{
    echo "Olá mundo!\n";
}

// Função que recebe um parâmetro
function mensagem($msg)
{
    echo "Mensagem: $msg\n";
}

// Função com dois parâmetros e que retorna o resultado
function soma(int $num1, int $num2)
{
    return $num1 + $num2; // Corrigido para somar, como o nome sugere
}

// ----------- Execução do código -----------

imprimirMensagem(); // Chamada da função sem parâmetros

mensagem("Olá, eu sou uma função com parâmetro!");
mensagem("Olá, sou uma nova mensagem!");

// Chamada da função com retorno
$retorno = soma(6, 9);

// Mostra o resultado da função no terminal
echo "O resultado da função soma é: $retorno\n";
?>
