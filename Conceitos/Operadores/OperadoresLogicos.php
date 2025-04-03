<?php

$a = 10;
$b = 30; // Atribuindo 30 diretamente a $b, para refletir o valor final correto de $b
$c = 40;

$igual = $a === $b; // Verifica se $a e $b são iguais em valor e tipo
var_dump($igual); // False, pois $a (10) não é igual a $b (30)

$igual = $a != $b; // Verifica se $a e $b são diferentes
var_dump($igual); // True, pois 10 é diferente de 30

$igual = $a * 2 === $b; // Verifica se $a multiplicado por 2 é igual a $b
var_dump($igual); // False, pois 10 * 2 (20) não é igual a 30

// Usando operadores lógicos

// AND lógico (&&) - true se ambos os lados forem verdadeiros
$igual = ($a === 10) && ($b === 30); // Verifica se $a é igual a 10 E $b é igual a 30
var_dump($igual); // True, pois ambos são verdadeiros

// OR lógico (||) - true se pelo menos um dos lados for verdadeiro
$igual = ($a === 10) || ($b === 40); // Verifica se $a é igual a 10 OU $b é igual a 40
var_dump($igual); // True, pois $a é igual a 10 (mesmo que $b não seja igual a 40)

// NOT lógico (!) - inverte o valor lógico
$igual = !($a === 5); // Verifica se $a não é igual a 5
var_dump($igual); // True, pois $a é 10 e não 5

// Exemplo com múltiplas condições
$igual = ($a < 20) && ($b > 25); // Verifica se $a é menor que 20 E $b é maior que 25
var_dump($igual); // True, pois $a (10) é menor que 20 E $b (30) é maior que 25

$igual = ($a < 20) || ($b < 25); // Verifica se $a é menor que 20 OU $b é menor que 25
var_dump($igual); // True, pois $a (10) é menor que 20 (mesmo que $b não seja menor que 25)

?>
