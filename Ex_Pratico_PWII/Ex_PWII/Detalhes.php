<?php
require_once 'Produto.php';

class Detalhes extends Produto {
    public $anoFabricacao;

    public function __construct($preco, $codigoProduto, $tipoProduto, $anoFabricacao) {
        parent::__construct($preco, $codigoProduto, $tipoProduto);
        $this->anoFabricacao = $anoFabricacao;
    }

    public function apresentar() {
        echo "Preço: {$this->preço}, Codigo: {$this->codigoProduto}, Tipo: {$this->tipoProduto}, Ano de Fabricação: {$this->anoFabricacao} <br>";
    }
}
?>
