<?php 

// Definimos a variável $preco e atribuímos o valor 100 a ela.
$preco = 100;

// Iniciamos uma estrutura condicional "if" para verificar se o preço é maior ou igual a 100.
if ($preco >= 100) {
    // Se a condição for verdadeira, o código calcula um desconto de 15% sobre o preço.
    // A operação ($preco * 15 / 100) calcula o valor do desconto.
    // O resultado será impresso com a mensagem 'Ganhou um desconto de' seguida do valor do desconto calculado.
    echo 'Ganhou um desconto de ' . ($preco * 15 / 100) . ' reais';
} elseif ($preco <= 100) {
    // Se o preço for menor ou igual a 100, esta parte será executada.
    // Aqui, aplicamos um desconto de 5%.
    echo 'Ganhou um desconto de ' . ($preco * 5 / 100) . ' reais';
} else {
    // Este bloco else é redundante neste caso, pois o if e o elseif já cobrem todas as possibilidades (preço maior ou igual a 100 e preço menor ou igual a 100).
    // O "else" não será executado neste código.
    echo "Nenhum desconto foi aplicado.";
};

?>
