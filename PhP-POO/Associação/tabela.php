<?php

require_once "Cliente.php";
require_once "Pedido.php";

$c = new Cliente("David", 18, "david@gmail.com");
$p = new Pedido(1, "R$ 100,00", $c);

$p->exibirInfo();