<?php

$a = 10;
$b = 30; // Atribuindo 30 diretamente a $b, para refletir o valor final correto de $b
$c = 40;

// Exemplos com operadores aritméticos

// Soma
$soma = $a + $b; // $a (10) + $b (30)
var_dump($soma); // 40

// Subtração
$subtracao = $b - $a; // $b (30) - $a (10)
var_dump($subtracao); // 20

// Multiplicação
$multiplicacao = $a * 2; // $a (10) * 2
var_dump($multiplicacao); // 20

// Divisão
$divisao = $b / 2; // $b (30) / 2
var_dump($divisao); // 15

// Exponenciação
$exponenciacao = $a ** 2; // $a (10) elevado ao quadrado
var_dump($exponenciacao); // 100

// Atribuição com soma
$a += 5; // Equivalente a $a = $a + 5
var_dump($a); // 15, pois $a era 10 e agora foi somado 5

// Atribuição com subtração
$b -= 10; // Equivalente a $b = $b - 10
var_dump($b); // 20, pois $b era 30 e agora foi subtraído 10

?>
