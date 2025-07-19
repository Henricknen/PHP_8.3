<?php

class Conexao {

    private string $conexao;
    
    public function __construct() {     // 'Construtor' é executado automaticamente ao instanciar o objeto
        $this->conexao = "Conectado";
        echo "Conexão com banco de dados criada...<br>";
    }

    public function __destruct() {      // 'Destrutor' é executado automaticamente ao final do script ou quando destruindo o objeto
        $this->conexao = '';
        echo "Conexão encerrada...<br>";
    }
    
    public function consulta() {        // simulando uma consulta no banco de dados
        echo "Realizada consulta no banco de dados...<br>";
    }

}

$conexao = new Conexao();       // __construct é chamado automaticamente
$conexao->consulta();     // executa uma simulação de consulta do banco de dados
// __destruct será chamado automaticamente ao final do script
