<?php

require_once 'Relatorio.php';

// Testando o código
$relatorio = new Relatorio("João", "Gerente", 4500.00, "Maria", "123.456.789-00", "maria@email.com");
$relatorio->gerarRelatorio();
