<?php

class Carro {
    public string $cor;
    public int $ano;
    public string $modelo;

    public function __construct(string $cor, int $ano, string $modelo) {        // '__construct' é um método magíco de construção, que está reçebendo parâmetros, que serão gravados nos atributos das classes
        
        $this-> cor = $cor;     // inserindo nos 'atributos' dos parâmentos reçebidos no método __contruct
        $this-> ano = $ano;
        $this-> modelo = $modelo;
        echo 'Construindo Carro.....'. $this-> modelo. '...<br>';      // utilizando '$this' para acessar o atributo modelo
    }
    
    public function acelerar() {
        echo 'Acelerando...';
    }

    public function freiar() {
        echo 'Freiando...';
    }
}

$carro1 = new Carro('Azul', 2025, 'Ferrari');        // ao usar 'new', o método '__construct' é automaticamente chamado para inicializar o objeto
$carro2 = new Carro('Preto', 2030, 'Lamborghini');
var_dump($carro2);