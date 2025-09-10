<?php
require_once 'Usuario.php';

class Administrador extends Usuario {
    public $emailAdm;
    public $senhaAdm;

    public function __construct($nome, $CPF, $emailAdm,$senhaAdm) {
        parent:: __construct($nome,$CPF);
        $this->emailAdm = $emailAdm;
        $this->senhaAdm = $senhaAdm;
        
    }

    public function apresentar(){
    echo "Nome: {$this->nome}, CPF: {$this->CPF}, Eamil: {$this->emailAdm}, Senha: {$this->senhaAdm} <br>";
}

}

?>