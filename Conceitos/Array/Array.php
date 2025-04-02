<?php

// Array de números
$num = [1, 2, 3, 4, 5];

// Array de pessoas
$pessoa = [
    "a" => "David",
    "b" => "Stephany",
    "c" => "Aquiles",
    "d" => "André",
];

// Exibir arrays formatados com títulos
echo "=== Array de Números ===\n";
print_r($num);

echo "\n=== Array de Pessoas ===\n";
print_r($pessoa);

// Exibir um elemento específico do array $num
echo "\nElemento na posição 1 do array 'num': " . $num[1] . "\n";

// Exibir o total de elementos no array $num antes e depois de ordenar
$totalAntes = count($num);
echo "\nTotal de elementos no array 'num' antes de ordenar: $totalAntes\n";

// Ordenar o array de números
sort($num);

// Exibir o total após ordenar
$totalDepois = count($num);
echo "\nTotal de elementos no array 'num' após ordenar: $totalDepois\n";

// Exibir o array de números ordenado
echo "\nArray 'num' após ordenar:\n";
print_r($num);

?>
