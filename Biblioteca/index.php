<?php
require 'Livro.php';
$livro1 = new Livro();
$livro1->titulo = "É o rock!!";
$livro1->autor = "Roberval Santos";
$livro1->categoria = "Musical";

$livro2 = new Livro();
$livro2->titulo = "É o roquinho!!";
$livro2->autor = "Antonio Faria";
$livro2->categoria = "Musical";

$livro1->imprimeDados();
echo "</br>";
$livro2->imprimeDados();

?>