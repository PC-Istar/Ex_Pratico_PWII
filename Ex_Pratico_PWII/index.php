<?php
require_once 'Cliente.php';

$c1 = new Cliente("Roberval", "123.456.789-00", 946523698);
$c1 ->apresentar();

require_once 'Administrador.php';

$A1 = new Administrador("Antonio", "132.465.765-00", "antonioadm@gmail.com", "eorockyeah");
$A1 ->apresentar();

?>