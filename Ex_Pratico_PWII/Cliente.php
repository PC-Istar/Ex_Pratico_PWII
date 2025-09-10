<?php
require_once 'Usuario.php';

class Cliente extends Usuario {
    public $telefone;

    public function __construct($nome, $CPF, $telefone) {
        parent::__construct($nome, $CPF);
        $this->telefone = $telefone;
    }

    public function apresentar(){
        echo "Nome: {$this->nome}, CPF: {$this->CPF}, Telefone: {$this->telefone} <br>";
    }
}


?>