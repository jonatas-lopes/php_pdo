<?php 

class ContaBancaria{

private $banco;
private $titular;
private $agencia;
private $contacorrente;
private $saldo;

    public function __construct($banco, $titular, $agencia, $contacorrente, $saldo){
        
       $this->banco = $banco;
       $this->titular = $titular;
       $this->agencia = $agencia;
       $this->contacorrente = $contacorrente;
       $this->saldo = $saldo;

    }

    public function obterSaldo(){

        return "Seu saldo atual é ". $this->saldo;


    }

    public function depositar($valor){

        $this->saldo += $valor;
        return "Deposito realizado no valor de " .$valor;


    }

    public function sacar($valor){

        $this->saldo -= $valor;
        return "Saque realizado no valor de " .$valor;
    }
}


$conta = new ContaBancaria('Itau Unibanco','Jonatas Boldrin','0224','0101-15',0);
$conta2 = new ContaBancaria('Bradesco','Amarildo Lopes','0224','0101-12',0);

echo $conta->obterSaldo();

echo "<br>";

echo $conta->depositar(300.000);

echo "<br>";

echo $conta->obterSaldo();

echo "<br>";

echo $conta->sacar(20.000);

echo "<br>";

echo $conta->obterSaldo();

echo "<br>";
echo "<br>";
echo "<br>";

echo $conta2->obterSaldo();

echo "<br>";

echo $conta2->depositar(300.000);

echo "<br>";

echo $conta2->obterSaldo();

echo "<br>";

echo $conta2->sacar(20.000);

echo "<br>";

echo $conta2->obterSaldo();



exit();
