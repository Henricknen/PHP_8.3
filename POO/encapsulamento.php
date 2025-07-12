<?php

class Conta {       // classe 'Conta'
    
    private int $saldo;      // definindo atributo como 'private' para evitar alteração fora da classe

    public function __contruct(int $saldo) {
        $this-> saldo = $saldo;
    }

    public function sacar(int $valor) {
        echo 'Voçê sacou: '. $valor. '<br>';
        $this-> saldo -= $valor;
    }

    public function depositar(int $valor) {
        echo 'Voçê depositou: '. $valor. '<br>';
        $this-> saldo += $valor;
    }

    public function verSaldo() {        // função 'pública' verSaldo retorna saldo 'private' de dentro da classe
        return $this-> saldo;
    }
}

$conta1 = new Conta(500);

$conta1-> depositar(500);
echo 'Saldo Inicial: '. $conta1-> verSaldo(). '<br>';
$conta1-> depositar(100);
$conta1-> sacar(500);

echo 'Saldo Atual : '. $conta1-> verSaldo(). '<br>';