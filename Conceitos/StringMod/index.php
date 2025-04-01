<?php

$nome = " David Santos da Silva ";

echo "Comprimento da string: " . strlen($nome) . "\n";  // Retorna o comprimento da string, incluindo espaços
echo "Substring (índice 4, 8 caracteres): " . substr($nome, 4, 8) . "\n";  // Retorna uma substring, começando do índice 4, com 8 caracteres

echo "Trim (remover espaços no início e fim): '" . trim($nome) . "'\n";  // Remove espaços do início e fim da string
echo "rTrim (remover espaços no fim): '" . rtrim($nome) . "'\n";  // Remove espaços apenas do final da string
echo "lTrim (remover espaços no início): '" . ltrim($nome) . "'\n";  // Remove espaços apenas do início da string

echo "Minúsculas: " . strtolower($nome) . "\n";  // Converte todos os caracteres para minúsculo
echo "Maiúsculas: " . strtoupper($nome) . "\n";  // Converte todos os caracteres para maiúsculo
echo "Primeira letra maiúscula: " . ucfirst($nome) . "\n";  // Converte a primeira letra para maiúscula
echo "Primeiras letras de cada palavra maiúsculas: " . ucwords($nome) . "\n";  // Converte a primeira letra de cada palavra para maiúscula

echo "Início com 'd'? " . (str_starts_with($nome, "d") ? "Sim" : "Não") . "\n";  // Verifica se a string começa com "d"
echo "Fim com 's'? " . (str_ends_with($nome, "s") ? "Sim" : "Não") . "\n";    // Verifica se a string termina com "s"
echo "Contém 'David'? " . (str_contains($nome, "David") ? "Sim" : "Não") . "\n"; // Verifica se a string contém "David"

echo "String preenchida até 30 caracteres à direita: '" . str_pad($nome, 30, "000", STR_PAD_RIGHT) . "'\n";  // Preenche a string até o comprimento de 30, com "000" à direita

?>
