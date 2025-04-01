<?php 

$nome = "David";
$idade = 20;
$salario = 2000.0;
$endereco = "Jardas de Alencar";

// Melhorando a formatação e a visualização
echo "------------------------------------------\n";
echo "Detalhes do Funcionário:\n";
echo "------------------------------------------\n";
echo "Nome: $nome\n";
echo "Idade: $idade anos\n";
echo "Salário: R$ " . number_format($salario, 2, ',', '.') . "\n";
echo "Endereço: $endereco\n";
echo "------------------------------------------\n";

?>
