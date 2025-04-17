<?php

require_once 'Festa.php';
require_once 'Convidado.php';

$c = new Festa('Praia', '2023-10-01', 'João', 25, '123456789');
$c->exibirListaConvidados();