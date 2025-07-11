<?php

class Conta {       // classe 'Conta'
    
    public int $saldo;      // 'atributo' $saldo

    public function __contruct(int $saldo) {        // método que define o 'saldo inicial' da conta
        $this-> saldo = $saldo;     // atribuindo 
    }

    public function sacar(int $valor) {     // método 'sacar'
        echo 'Voçê sacou: '. $valor. '<br>';
        $this-> saldo -= $valor;
    }

    public function depositar(int $valor) {     // método 'depositar'
        echo 'Voçê depositou: '. $valor. '<br>';
        $this-> saldo += $valor;
    }
}

$conta1 = new Conta(500);       // criando 'conta1'

$conta1-> depositar(500);   // depositando
echo 'Saldo Inicial: '. $conta1-> saldo. '<br>';
echo $conta1-> saldo;

echo 'Saldo Atual: '. $conta1-> saldo. '<br>';