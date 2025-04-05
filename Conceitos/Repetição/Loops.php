<?php
// Definição do array de pessoas
$pessoas = [
    ['id' => 1, 'nome' => 'Ronaldo'],
    ['id' => 2, 'nome' => 'João'],
    ['id' => 3, 'nome' => 'Maria'],
    ['id' => 4, 'nome' => 'Pedro']
];

echo "=== Usando FOR ===\n";
for ($i = 0; $i < count($pessoas); $i++) {
    echo "Cliente: {$pessoas[$i]['nome']} | ID: {$pessoas[$i]['id']}\n";
}

echo "\n=== Usando WHILE ===\n";
$i = 0;
while ($i < count($pessoas)) {
    echo "Cliente: {$pessoas[$i]['nome']} | ID: {$pessoas[$i]['id']}\n";
    $i++;
}

echo "\n=== Usando FOREACH ===\n";
foreach ($pessoas as $valor) {
    echo "Cliente: {$valor['nome']} | ID: {$valor['id']}\n";
}

echo "\nFim do programa.\n";
