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

// Ordenar o array de números de forma decrescente
rsort($num);

// Exibir o total após ordenar de forma decrescente
$totalReverse = count($num);
echo "\nTotal de elementos no array 'num' após ordenar decrescente: $totalReverse\n";

// Exibir o array de números ordenado de forma decrescente
echo "\nArray 'num' após ordenar decrescente:\n";
print_r($num);

array_push($num, 6, 7, 8);
print_r($num);
rsort($num);
print_r($num);

array_push($pessoa, "Marcos", "Igor");
print_r($pessoa);
rsort($pessoa);
print_r($pessoa);

$pessoa[e] = "Igor";
$pessoa[f] = "Marcos";
print_r($pessoa);
rsort($pessoa);
print_r($pessoa);

unset($pessoa[5], $pessoa[2]);
print_r($pessoa);
rsort($pessoa);
print_r($pessoa);

?>
