<?php
class Usuario {
    public $nome;
    public $CPF;

    public function __construct($nome, $CPF){
        $this->nome = $nome;
        $this->CPF = $CPF;
    }

    public function apresentar() {
        echo "Nome: {`$this->nome}, CPF: {$this->CPF} <br>";
    }

}


?>