<?php

$f = new Funcionarios('João', 'Gerente');
$f2 = new Funcionarios('Stephany', 'Administração');
$f3 = new Funcionarios('Carlos', 'Analista de Sistemas');

$d = new Departamento('TI', 'São Paulo', $f);

$d->adicionarFuncionario($f);
$d->adicionarFuncionario($f2);
$d->adicionarFuncionario($f3);

$d->listarFuncionarios();