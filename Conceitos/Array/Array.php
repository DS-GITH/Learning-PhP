<?php

$num = [1, 2, 3, 4, 5];

$pessoa = [
    "a" => "David",
    "b" => "Stephany",
    "c" => "Aquiles",
    "d" => "André",
];

// Exibir arrays formatados
echo "=== Array de Números ===\n";
print_r($num);

echo "\n=== Array de Pessoas ===\n";
print_r($pessoa);

// Exibir um elemento específico do array $num
echo "\nElemento na posição 1 do array num: " . $num[1] . "\n";

?>
