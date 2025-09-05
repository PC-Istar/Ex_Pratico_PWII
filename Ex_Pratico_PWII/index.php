<?php
require_once 'Produto.php';

$produto = new Produto(50,02, "Brinquedo");
$produto->apresentar();

require_once 'Detalhes.php';

$detalhes = new Detalhes(50, 02, "Brinquedo", 2020);
$detalhes->apresentar();
?>