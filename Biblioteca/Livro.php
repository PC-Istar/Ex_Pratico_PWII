<?php
class Livro{
    var $titulo;
    var $autor;
    var $categoria;

    public function imprimeDados(){
        echo "Titulo: " . $this->titulo;
        echo "Autor: " . $this->autor;
        echo "Categoria " . $this->categoria;
    }

    public function showTitulo ($titulo){
        return $this->titulo;
    }

}

?>