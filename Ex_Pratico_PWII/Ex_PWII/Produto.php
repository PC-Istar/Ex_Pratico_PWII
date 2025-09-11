<?php
class Produto {
    public $preço;
    public $codigoProduto;
    public $tipoProduto;

    public function __construct($preço, $codigoProduto, $tipoProduto) {
        $this->preço = $preço;
        $this->codigoProduto = $codigoProduto;
        $this->tipoProduto = $tipoProduto;
    }

    public function apresentar (){
        echo "Preço: {$this->preço}, Codigo: {$this->codigoProduto}, Tipo: {$this->tipoProduto} <br>";
    }
}


?>