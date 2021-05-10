<?php


class Contabancaria
{
    public $banco;
    public $nomeTitular;
    public $numeroAgencia;
    public $numeroConta;
    public $digitoConta;
    public $saldo;

    public function _construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $digitoConta, $saldo) {
        $this->banco = $banco;
        $this->nomeTitutar = $nomeTitular;
        $this->numeroAgencia =$numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->digitoConta = $digitoConta;
        $this->saldo = $saldo;        
    }


    public function obterSaldo() {
            return 'Sou o método obtersaldo()' . PHP_EOL;        
    }

}


$conta = new ContaBancaria();
$conta->banco='Banco do Brasil';
$conta->nomeTitular = 'João da Silva';
$conta->numeroAgencia =  '4569';
$conta->numeroConta ='23341';
$conta->digitoConta =8;
$conta->saldo=6300.50;


var_dump($conta->banco);
echo 'O nome do titular da conta é ' .$conta->nomeTitular. PHP_EOL;
var_dump($conta->nomeTitular);
var_dump($conta->numeroAgencia);
var_dump($conta->numeroConta);
var_dump($conta->digitoConta);
var_dump($conta->saldo);
echo $conta->obterSaldo();

//IMPRIMINDO O OBJETO INTEIRO
var_dump($conta);




