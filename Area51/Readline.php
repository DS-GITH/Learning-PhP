<?php

echo "Escreva seu nome: \n";
$nome = readline();

echo "Informe sua profissão: \n";
$prof = readline();

echo "Informe sua idade: \n";
$idade = intval(readline());

echo "O $nome que tem $idade anos, que trabalha no setor de $prof, se cadastrou! \n";
echo gettype($idade);

?>