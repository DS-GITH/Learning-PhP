<?php 

$a = 10;
$b = 30; // Atribuindo 30 diretamente a $b, para refletir o valor final correto de $b
$c = 40;

// Estruturas de controle if, else e elseif

// Exemplo simples de if
if ($a > $b) {
    echo '$a é maior que $b';
} else {
    echo '$a não é maior que $b';
}
// Esperado: '$a não é maior que $b' (pois $a é 15 e $b é 20)

// Exemplo com else
if ($a == $b) {
    echo '$a é igual a $b';
} else {
    echo '$a não é igual a $b';
}
// Esperado: '$a não é igual a $b' (pois $a é 15 e $b é 20)

// Exemplo com elseif em uma estrutura diferente
if ($a > $b):
    echo '$a é maior que $b';
    elseif ($a == $b):
    echo '$a é igual a $b';
endif;
  


if ($a > $b) {
    echo '$a é maior que $b';
} elseif ($a == $b) {
    echo '$a é igual a $b';
} else {
    echo '$a é menor que $b';
}

// Esperado: '$a é menor que $b' (pois $a é 15 e $b é 20)

// Exemplo com múltiplas condições
if ($a > $b && $c > $b) {
    echo '$a é maior que $b e $c é maior que $b';
} else {
    echo 'Uma das condições é falsa';
}
// Esperado: '$a é menor que $b', então "Uma das condições é falsa", pois $a é 15 e $b é 20

?>
