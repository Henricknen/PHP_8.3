<?php
class Produto {

    private string $nome;        // atributo 'nome'
    private float $preco;

    public function __construct(string $nome, float $preco) {

        $this-> nome = $nome;
        $this-> preco = $preco;
    }

    public function getPreco() {        // método 'getPreco' é um 'getter', um padrão comum, para acessar o atributo 'private' preco

        return $this-> preco;
    }

    public function setPreco(float $preco) {        // método 'setPreco'

        $this-> preco = $preco;
    }
    
}

$produto1= new Produto('Cadeira', 500.00);
var_dump($produto1-> getPreco());       // obtendo o preço do produto usando o getter getPreco()